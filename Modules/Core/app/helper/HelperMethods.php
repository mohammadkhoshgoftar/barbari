<?php

namespace Modules\Core\app\helper;

use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;

class HelperMethods
{
    public static function convertPersianToEnglishNumbers($string): array|string
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        return str_replace($persian, $english, $string);
    }

    public static function convertJalaliToGregorian($jalaliDate): string
    {
        $jalaliDate = self::convertPersianToEnglishNumbers($jalaliDate);
        return Carbon::instance(Verta::parse($jalaliDate)->datetime())->timezone(config('app.timezone'))->toDate()->format('Y-m-d');
    }
}