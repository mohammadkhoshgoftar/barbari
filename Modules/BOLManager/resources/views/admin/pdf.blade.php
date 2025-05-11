<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بارنامه الکترونیکی جاده ای داخلی</title>
    <style>

        body {
            font-family: 'vazir';
            font-size: 12px;
            direction: rtl;
            text-align: right;
            margin: 20px;
        }

        .invoice {
            border: 2px solid #000;
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        table, td, th {
            direction: rtl;
            text-align: center;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            vertical-align: middle;
        }

        .stamp, .qrcode {
            border: 1px dashed #000;
            width: 100px;
            height: 100px;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            font-size: 10px;
            line-height: 100px; /* دقیقا وسط چین بشه */
        }

        .highlight {
            background-color: yellow;
        }

        .info-table td, .sender-receiver-table td {
            border: none;
            text-align: right;
            padding: 2px 5px;
        }
    </style>
</head>
<body>
<div class="invoice">
    <h3 style="text-align: center; margin-top: 10px">بارنامه الکترونیکی جاده ای داخلی</h3>

    <table style="width: 100%; table-layout: fixed; margin-bottom: 10px; border: none;">
        <tr>
            <td style="width: 15%; border: 1px solid #000; text-align: center; vertical-align: middle;">
                <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
                    <strong style="font-size: 14px;">شناسه</strong>
                </div>
            </td>
            <td style="width: 85%; padding: 5px; vertical-align: top;">
                <div style="margin-bottom: 8px"><strong>شماره بارنامه:</strong> {{ $data->waybill_number }} &nbsp;&nbsp; <strong>تاریخ صدور:</strong> {{ $data->waybill_date }} | {{ $data->waybill_time }}</div>
                <div style="margin-bottom: 8px"><strong>شماره بیمه نامه:</strong> {{ $data->insurance_contract_number }} &nbsp;&nbsp; <strong>شرکت بیمه:</strong> {{ $data->insurance_company_name }}</div>
                <div><strong>مبلغ بیمه:</strong> {{ number_format($data->insurance_value) }} ریال</div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <th>نام راننده</th>
            <th>کد ملی</th>
            <th>شماره تماس</th>
        </tr>
        <tr>
            <td>{{ $data->drivers[0]['driver_name'] }}</td>
            <td>{{ $data->drivers[0]['driver_national_code'] }}</td>
            <td>{{ $data->drivers[0]['driver_mobile'] }}</td>
        </tr>
        <tr>
            <th>پلاک ناوگان</th>
            <th>شماره گواهینامه</th>
            <th>کارت ناوگان</th>
            {{--            <th>شماره بیمه راننده</th>--}}
{{--            <th>شماره بیمه بارگیر</th>--}}
        </tr>
        <tr>
            <td>{{ $data->drivers[0]['fleet_plate'] }}</td>
            <td>{{ $data->drivers[0]['driver_license_number'] }}</td>
{{--            <td>{{ $data->drivers[0]['worker_insurance_number'] }}</td>--}}
{{--            <td>{{ $data->drivers[0]['driver_insurance_number'] }}</td>--}}
            <td>9876543210</td>

        </tr>
    </table>

    <table class="sender-receiver-table">
        <tr>
            <td><strong>فرستنده:</strong> {{ $data->sender_name }} | <strong>شناسه ملی:</strong> {{ $data->sender_national_code }} | <strong>کدپستی
                    :</strong> {{ $data->sender_postal_code }} {{--| <strong>آدرس:</strong> {{ $data->sender_address }}--}}
            </td>
        </tr>
        <tr>
            <td><strong>گیرنده:</strong> {{ $data->receiver_name }} | <strong>شناسه ملی:</strong> {{ $data->receiver_national_code }} | <strong>کدپستی
                    :</strong> {{ $data->receiver_postal_code }}{{-- | <strong>آدرس:</strong> {{ $data->receiver_address }}--}}
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <th>نوع محموله</th>
            <th>وزن / حجم</th>
            <th>تعداد</th>
            <th>بسته بندی</th>
            <th>مبدأ بارگیری</th>
            <th>مقصد تخلیه</th>
        </tr>
        <tr>
            <td>{{ $data->cargos[0]['cargo_name'] }}</td>
            <td>{{ $data->cargos[0]['cargo_weight'] }} کیلوگرم</td>
            <td>{{ $data->cargos[0]['cargo_quantity'] }}</td>
            <td>{{ $data->cargos[0]['cargo_packaging'] }}</td>
            <td>{{ $data->loading_origin }}</td>
            <td>{{ $data->unloading_destination }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>کرایه حمل و نقل</th>
            <th>کارگری</th>
            <th>مجموع</th>
        </tr>
        <tr>
            <td>{{ number_format($data->rent_cost) }}</td>
            <td>{{ number_format($data->labor_cost) }}</td>
            <td>{{ number_format($data->rent_cost+$data->labor_cost) }}</td>
        </tr>
    </table>

    <table style="width: 100%; table-layout: fixed; margin-top: 10px;">
        <tr>
            <td style="width: 30%; text-align: center; vertical-align: middle;">
                <img src="{{ public_path('export/image/img.png') }}" style="width: 60px; height: 60px;" alt="QR Code">
            </td>
            <td style="width: 35%; text-align: center; vertical-align: middle; font-size: 14px;">
                مهر و امضا شرکت حمل و نقل
            </td>
            <td style="width: 35%; text-align: center; vertical-align: middle; font-size: 14px;">
                مهر و امضا راننده
            </td>
        </tr>
    </table>


    <p style="text-align: center; font-size: 10px;">این سند جهت حمل و نقل کالا صادر گردیده است.</p>
</div>
</body>
</html>
