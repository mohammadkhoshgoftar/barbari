<?php

namespace Modules\Core\app\Methods;

use Nwidart\Modules\Facades\Module;

class CoreHelperClass
{

    public static function getModuleName(): array
    {
        return array_keys(Module::all());
    }
}
