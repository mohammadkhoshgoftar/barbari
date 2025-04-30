<?php

return [
    App\Providers\AliasServiceProvider::class,
    App\Providers\AppServiceProvider::class,
    Modules\Auth\Providers\AuthServiceProvider::class,
    Modules\Permission\Providers\PermissionServiceProvider::class,
    Modules\Core\Providers\CoreServiceProvider::class,
    Modules\BOLManager\Providers\BOLManagerServiceProvider::class,
    Spatie\Permission\PermissionServiceProvider::class,
    Kavenegar\Laravel\ServiceProvider::class,
];