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
            margin-bottom: 20px;
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
    <h3 style="text-align: center;">بارنامه الکترونیکی جاده ای داخلی</h3>

    <table style="width: 100%; table-layout: fixed; margin-bottom: 20px; border: none;">
        <tr>
            <td style="width: 15%; border: 1px solid #000; text-align: center; vertical-align: middle; height: 80px;">
                <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
                    <strong style="font-size: 14px;">شناسه</strong>
                </div>
            </td>
            <td style="width: 85%; padding: 5px; vertical-align: top;">
                <div><strong>شماره بارنامه:</strong> 123456789 &nbsp;&nbsp; <strong>تاریخ صدور:</strong> ۱۴۰۳/۰۲/۰۶</div>
                <div><strong>شماره بیمه نامه:</strong> 987654321 &nbsp;&nbsp; <strong>شرکت بیمه:</strong> بیمه ایران</div>
                <div><strong>شماره قرارداد بیمه:</strong> 654321987 &nbsp;&nbsp; <strong>مبلغ بیمه:</strong> ۵۰۰٬۰۰۰٬۰۰۰ ریال</div>
            </td>
        </tr>
    </table>


    <table>
        <tr>
            <th>نام راننده</th>
            <th>کد ملی</th>
            <th>شماره تماس</th>
            <th>کارت ناوگان</th>
        </tr>
        <tr>
            <td>علی محمدی</td>
            <td>1234567890</td>
            <td>09123456789</td>
            <td>9876543210</td>
        </tr>
        <tr>
            <th>پلاک ناوگان</th>
            <th>شماره گواهینامه</th>
            <th>شماره بیمه راننده</th>
            <th>شماره بیمه بارگیر</th>
        </tr>
        <tr>
            <td>12الف345</td>
            <td>1234567</td>
            <td>654321987</td>
            <td>789654123</td>
        </tr>
    </table>

    <table class="sender-receiver-table">
        <tr>
            <td><strong>فرستنده:</strong> علی رضایی | <strong>شناسه ملی:</strong> 1234567890 | <strong>شماره
                    تماس:</strong> 09121234567 | <strong>آدرس:</strong> تهران، خیابان آزادی
            </td>
        </tr>
        <tr>
            <td><strong>گیرنده:</strong> محمد حسینی | <strong>شناسه ملی:</strong> 0987654321 | <strong>شماره
                    تماس:</strong> 09129876543 | <strong>آدرس:</strong> قم، بلوار امام خمینی
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
            <td>محصولات شیمیایی</td>
            <td>۱۲۵۰ کیلوگرم</td>
            <td>۱۰</td>
            <td>سایر</td>
            <td>تهران</td>
            <td>قم</td>
        </tr>
    </table>

    <table style="width: 100%; table-layout: fixed; margin-top: 20px;">
        <tr>
            <td style="width: 30%; text-align: center; vertical-align: middle;">
                <img src="{{ public_path('export/image/img.png') }}" style="width: 80px; height: 80px;" alt="QR Code">
            </td>
            <td style="width: 35%; text-align: center; vertical-align: middle; font-size: 14px;">
                مهر و امضا شرکت حمل و نقل
            </td>
            <td style="width: 35%; text-align: center; vertical-align: middle; font-size: 14px;">
                مهر و امضا راننده
            </td>
        </tr>
    </table>


    <p style="text-align: center;">این سند جهت حمل و نقل کالا صادر گردیده است.</p>
</div>
</body>
</html>
