<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بارنامه الکترونیکی جاده ای داخلی</title>
    <style>
        @font-face {
            font-family: 'vazir';
            src: url('/path/to/vazir-font.woff') format('woff');
        }

        body {
            font-family: 'vazir', sans-serif;
            font-size: 16px;
            line-height: 1.8;
            direction: rtl;
            text-align: right;
            margin: 2px;
        }

        .invoice {
            border: 3px solid #000;
            padding: 4px;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
            table-layout: fixed;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        th, td {
            border: 1px solid #000;
            padding: 4px 6px;
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
            font-size: 14px;
            line-height: 1.6;
        }

        th {
            font-weight: bold;
        }

        .header-table td {
            border: none;
            text-align: right;
            padding: 5px 8px;
            font-size: 18px;
        }

        .qrcode-cell {
            width: 6% !important;
            padding: 0 2px 0 0 !important;
            text-align: center;
            border: none !important;
        }

        .qrcode-cell img {
            width: 180px !important;
            height: 180px !important;
            display: inline-block;
            margin-bottom: 6px;
            border: none !important;
        }

        .sign-cell {
            vertical-align: top;
            font-size: 15px;
            padding-top: 6px;
            font-weight: bold;
            width: 22% !important;
            text-align: center;
        }

        table tr {
            height: 28px;
        }

        .footer-text {
            text-align: center;
            font-size: 10px;
            margin: 2px !important;
            padding: 2px !important;
        }
    </style>
</head>
<body>
<div class="invoice">
    <h2 style="text-align: center; margin: 8px 0;">بارنامه الکترونیکی جاده ای داخلی</h2>

    <table class="header-table">
        <tr>
            <td style="width: 15%; border: 1.5px solid #000; font-weight: bold; font-size: 14px; text-align: center; vertical-align: middle;">
                شناسه
            </td>
            <td style="width: 85%;">
                <table style="width: 100%; border: none; border-collapse: collapse;">
                    <tr>
                        <td style="border: none; width: 50%; padding: 4px;">
                            <strong>شماره بارنامه:</strong> {{ $data->waybill_number }}<br>
                            <strong>شماره بیمه نامه:</strong> {{ $data->insurance_contract_number }}<br>
                            <strong>مبلغ بیمه:</strong> {{ number_format($data->insurance_value) }} ریال

                        </td>
                        <td style="border: none; width: 50%; padding: 4px;">
                            <strong>تاریخ
                                صدور:</strong> {{ \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', $data->waybill_date)->format('Y/m/d') }}
                            <br>
                            <strong>شرکت بیمه:</strong> {{ $data->insurance_company_name }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan="4" style="text-align: right;">فرستنده: {{ $data->sender_name }} | شناسه
                ملی: {{ $data->sender_national_code }} | کدپستی: {{ $data->sender_postal_code }}</th>
        </tr>
        <tr>
            <th colspan="4" style="text-align: right;">گیرنده: {{ $data->receiver_name }} | شناسه
                ملی: {{ $data->receiver_national_code }} | کدپستی: {{ $data->receiver_postal_code }}</th>
        </tr>
    </table>

    <table>
        <tr>
            <th>نام راننده</th>
            <th>کد ملی</th>
            <th>شماره گواهینامه</th>
            <th>شماره تماس</th>
            <th>کارت ناوگان</th>
            <th>پلاک ناوگان</th>
        </tr>
        <tr>
            <td>{{ $data->drivers[0]['driver_name'] }}</td>
            <td>{{ $data->drivers[0]['driver_national_code'] }}</td>
            <td>{{ $data->drivers[0]['driver_license_number'] }}</td>
            <td>{{ $data->drivers[0]['driver_mobile'] }}</td>
            <td>9876543210</td>
            <td>{{ $data->drivers[0]['fleet_plate'] }}</td>
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
            <td>{{ number_format($data->rent_cost) }}    تومان </td>
            <td>{{ number_format($data->labor_cost) }} تومان  </td>
            <td>{{ number_format($data->rent_cost + $data->labor_cost) }} تومان</td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="qrcode-cell" rowspan="3">
                <img src="{{ public_path('export/image/imag2.png') }}" width="250" height="250" alt="QR Code"/>
            </td>
            <td class="sign-cell">امضاء و اثر انگشت راننده</td>
            <td class="sign-cell">مهر و امضا شرکت حمل و نقل</td>
        </tr>
    </table>

    <p class="footer-text">این سند جهت حمل و نقل کالا صادر گردیده است.</p>
</div>
</body>
</html>
