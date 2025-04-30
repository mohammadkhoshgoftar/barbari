<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Modules\Core\app\Patterns\Facades\Image\Image;
use Modules\Otp\app\Patterns\Facades\Otp;

class AliasServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // Get the AliasLoader instance
        $loader = AliasLoader::getInstance();

        // Add your aliases
        $loader->alias('ImageResize', Image::class);
        $loader->alias('URL', URL::class);
        $loader->alias('Otp', Otp::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
