<?php

namespace App\Providers;

use Modules\Otp\app\Patterns\Facades\OtpService;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('Otp', function ($app) {
            return new OtpService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Passport::loadKeysFrom(__DIR__.'/../secrets/oauth');
        $this->RegisterMacro();
        Gate::before(function ($user, $ability) {
            return $user->hasRole('superAdmin') ? true : null;
        });

        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }


    private function RegisterMacro(): void
    {
        Response::macro('success', function ($message = 'Information received successfully', $data = null) {
            return response()->json([
                'status' => true,
                'message' => $message,
                'data' => $data,
            ]);
        });

        Response::macro('error', function ($message, $data = null, $code = 500) {
            return response()->json([
                'status' => false,
                'error' => $message,
                'data' => $data,
            ], $code);
        });
    }
}
