<?php

namespace Modules\Core\app\Patterns\Facades\Image;

use Illuminate\Support\Facades\Facade;

class Image extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Image';
    }
}
