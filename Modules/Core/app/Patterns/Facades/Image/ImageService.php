<?php

namespace Modules\Core\app\Patterns\Facades\Image;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;



class ImageService
{
    protected array $configurations = [
        'blog' => [
            'directory' => 'blogs',
            'resizeDirectory' => 'blogs/resized',
            'dimensions' => [
                ['type' => 'resize', 'width' => 100, 'height' => 200],
                ['type' => 'crop', 'width' => 300, 'height' => 400],
                ['type' => 'resizeByWidth', 'width' => 500],
            ],
        ],
        'product' => [
            'directory' => 'products',
            'resizeDirectory' => 'products/resized',
            'dimensions' => [
                ['type' => 'resize', 'width' => 150, 'height' => 150],
                ['type' => 'crop', 'width' => 400, 'height' => 400],
                ['type' => 'resizeByWidth', 'width' => 300],
            ],
        ],
        'brand' => [
            'directory' => 'brand',
            'resizeDirectory' => 'brand/resized',
            'dimensions' => [
                ['type' => 'resize', 'width' => 100, 'height' => 100],
                ['type' => 'crop', 'width' => 400, 'height' => 400],
                ['type' => 'resizeByWidth', 'width' => 300],
            ],
        ],
        'category' => [
            'directory' => 'category',
            'resizeDirectory' => 'category/resized',
            'dimensions' => [
                ['type' => 'resize', 'width' => 150, 'height' => 150],
                ['type' => 'crop', 'width' => 400, 'height' => 400],
                ['type' => 'resizeByWidth', 'width' => 300],
            ],
        ],
    ];

    /**
     * Store the file and return the file name
     *
     * @param  mixed  $file
     * @param  string  $type
     * @return string
     */
    public function saveImage($file, $type)
    {
        try {
            if (!isset($this->configurations[$type])) {
                throw new \Exception('Invalid type provided.');
            }

            $config = $this->configurations[$type];
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/' . $config['directory'] ;

            // Store the file in the public directory
            $destinationPath = public_path($path);
            $file->move($destinationPath, $fileName);

            return $fileName;
        }catch (\Exception $exception){
            dd($exception);
        }

    }

    /**
     * Resize the image based on the configuration and store it in a new directory
     *
     * @param  string  $fileName
     * @param  string  $type
     * @return array
     */
    public function resizeAndStore($fileName, $type)
    {
        if (!isset($this->configurations[$type])) {
            throw new \Exception('Invalid type provided.');
        }

        $config = $this->configurations[$type];
        $originalPath = public_path('uploads/'.$config['directory'] . '/' . $fileName);
        $resizedPaths = [];

        if (!file_exists($originalPath)) {
            throw new \Exception('Original file not found.');
        }

        foreach ($config['dimensions'] as $dimension) {
            $resizedPath = public_path($this->getResizedPath($config['resizeDirectory'], $fileName, $dimension));

            if (file_exists($resizedPath)) {
                $resizedPaths[] = str_replace(public_path(), '', $resizedPath);
                continue;
            }

            $image = Image::make($originalPath);

            switch ($dimension['type']) {
                case 'crop':
                    $resizedImage = $image->crop($dimension['width'], $dimension['height']);
                    break;

                case 'resizeByWidth':
                    $resizedImage = $image->resize($dimension['width'], null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    break;

                case 'resize':
                default:
                    $resizedImage = $image->resize($dimension['width'], $dimension['height'], function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    break;
            }

            $resizedImage->save($resizedPath);
            $resizedPaths[] = str_replace(public_path(), '', $resizedPath);
        }

        return $resizedPaths;
    }

    /**
     * Build the path for storing the resized image
     *
     * @param  string  $directory
     * @param  string  $fileName
     * @param  array   $dimension
     * @return string
     */
    protected function getResizedPath($directory, $fileName, $dimension)
    {
        $pathInfo = pathinfo($fileName);
        return public_path($directory . '/' . $pathInfo['filename'] . '_' . $dimension['type'] . '_' . $dimension['width'] . (isset($dimension['height']) ? 'x' . $dimension['height'] : '') . '.' . $pathInfo['extension']);
//        return 'public/' . $directory . '/' . $pathInfo['filename'] . '_' . $dimension['type'] . '_' . $dimension['width'] . (isset($dimension['height']) ? 'x' . $dimension['height'] : '') . '.' . $pathInfo['extension'];
    }

    public function image($imageName, $type)
    {
        try {
            if (!isset($this->configurations[$type])) {
                throw new \Exception('Invalid type provided.');
            }

            $config = $this->configurations[$type];

            $originalPath = 'uploads/' . $config['directory'] . '/' . $imageName;

            if (!file_exists(public_path($originalPath))) {
                throw new \Exception('Image not found.');
            }


            $resizeDirectory = $config['resizeDirectory'];
            $resizedImagePath = 'uploads/' . $resizeDirectory . '/' . $imageName;

            if (file_exists(public_path($resizedImagePath))) {
                return asset($resizedImagePath);
            }

            return asset($originalPath);
        } catch (\Exception $exception) {

            return asset('images/default.png');
        }
    }


    public function getOrResizeImage($imageName, $type, $resizeMode = 'resize')
    {
        try {
            $manager = new ImageManager(Driver::class);


            if (!isset($this->configurations[$type])) {
                throw new \Exception('Invalid type provided.');
            }

            $config = $this->configurations[$type];
            $originalPath = public_path('uploads/' . $config['directory'] . '/' . $imageName);

            if (!file_exists($originalPath)) {
                throw new \Exception('Original image not found.');
            }

            $resizedDirectory = public_path('uploads/' . $config['resizeDirectory']);
            if (!file_exists($resizedDirectory)) {
                mkdir($resizedDirectory, 0755, true);
            }

            $dimension = $this->getDimensionByMode($config['dimensions'], $resizeMode);

            if (!$dimension) {
                throw new \Exception('Invalid resize mode provided.');
            }
            $resizedPath = $this->getResizedPath('uploads/'. $config['resizeDirectory'], $imageName, $dimension);
            if (file_exists($resizedPath)) {
                return asset(str_replace(public_path(), '', $resizedPath));
            }

            $image = $manager->read($originalPath);

            switch ($resizeMode) {
                case 'crop':
                    $resizedImage = $image->crop($dimension['width'], $dimension['height'])->save($resizedPath);
                    break;

                case 'resizeByWidth':
                    $resizedImage = $image->resize($dimension['width'], null, function ($constraint) {
//                        $constraint->aspectRatio($resizedPath);
                    })->save();
                    break;

                case 'resize':
                default:
                    $resizedImage = $image->resize($dimension['width'], $dimension['height'], function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($resizedPath);
                    break;
            }

            return asset(str_replace(public_path(), '', $resizedPath));
        } catch (\Exception $exception) {
            return asset('images/default.png');
        }
    }

    private function getDimensionByMode(array $dimensions, string $mode)
    {
        foreach ($dimensions as $dimension) {
            if ($dimension['type'] === $mode) {
                return $dimension;
            }
        }
        return null;
    }
}