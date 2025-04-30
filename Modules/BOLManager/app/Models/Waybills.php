<?php

namespace Modules\BOLManager\app\Models;

use Hekmatinasser\Verta\Verta;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use OwenIt\Auditing\Auditable;

class Waybills extends Model implements AuditableContract
{
    use HasFactory, SoftDeletes, Auditable, LogsActivity;
    protected $casts = [
        'drivers' => 'array',
        'cargos' => 'array',
    ];
    protected $guarded = [];

    protected $table = 'waybills';
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($shipment) {
            if (empty($shipment->waybill_number)) {
                $shipment->waybill_number = self::generateWaybillNumber();
            }
        });
    }

    private static function generateWaybillNumber()
    {
        $v = Verta::now(); // گرفتن زمان شمسی

        $date = $v->format('Ymd'); // تاریخ شمسی مثلا 14030213
        $time = $v->format('His'); // ساعت دقیقه ثانیه مثلا 153025

        return $date . $time;
    }
}
