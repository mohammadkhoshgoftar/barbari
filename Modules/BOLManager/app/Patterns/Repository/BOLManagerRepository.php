<?php

namespace Modules\BOLManager\app\Patterns\Repository;

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Response;
use Modules\BOLManager\app\Models\Waybills;
use Modules\Core\app\Patterns\Repository\Interface\CrudRepositoryInterface;
use Mpdf\Mpdf;

class BOLManagerRepository implements CrudRepositoryInterface
{
    private Waybills $model;

    public function __construct()
    {
        $this->model = new Waybills();
    }

    public function getItemById($id)
    {
        return $this->model->where('id', $id);
    }

    public function index(): void
    {

    }

    public function storeToDb($validatedData): bool
    {
        try {
            $data =$this->model->create($validatedData);
            $this->export($data->id);
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function updateToDb($validatedData, $id): bool
    {
        try {
            $product = $this->model->find($id);
            $product->update($validatedData);
            $this->export($product->id);
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function show($id)
    {
        try {
            $model = $this->model->findOrFail($id);
            $res = new BusinessResource($model);
            return Response::success(data: $res);
        } catch (\Exception $exception) {
            return Response::error($exception->getMessage());
        }
    }

    public function deleteToDb($id): bool
    {
        try {
            $model = $this->model->find($id);
            if ($model) {
                $model->delete();
                return true;
            } else {
                return false;
            }
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function export1($id)
    {
        $data = $this->model->findOrFail($id);
        $html = view('bolmanager::admin.pdf', compact('data'))->render();
        $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
//        $mpdf = new Mpdf([
//            'format' => 'A5',
//            'orientation' => 'L',
//            'margin_left' => 2,
//            'margin_right' => 2,
//            'margin_top' => 2,
//            'margin_bottom' => 2,
//            'default_font' => 'dejavusans',
//            'mode' => 'utf-8',
//            'useOTL' => true,
//            'useKashida' => 75,
//        ]);

        $mpdf = new Mpdf([
            'format' => 'A5',
            'orientation' => 'L',
            'margin_left' => 2,
            'margin_right' => 2,
            'margin_top' => 2,
            'margin_bottom' => 2,
            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], [
                public_path('export/fonts'),
            ]),
            'fontdata' => (new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'] + [
                    'iransans' => [
                        'R' => 'IranianSans.ttf',
//                        'B' => 'IRANSans-Bold.ttf',
                    ],
                ],
            'default_font' => 'iransans',
            'mode' => 'utf-8',
            'useOTL' => true,
            'useKashida' => 75,
        ]);

        $mpdf->WriteHTML($html);
        return $mpdf->Output('document.pdf', 'I'); // نمایش مستقیم

//        $pdf = SnappyPdf::loadView('bolmanager::admin.pdf');
//        return $pdf->inline('document.pdf');

//        {
//
//            $mpdf = new Mpdf([
//                'mode' => 'utf-8',
//                'format' => 'A5',
//                'orientation' => 'L',
//                'margin_left' => 2,
//                'margin_right' => 2,
//                'margin_top' => 2,
//                'margin_bottom' => 2,
//                'fontDir' => [public_path('export/fonts')],
//                'fontdata' => [
//                    'xbniloofar' => [
//                        'R' => 'XB-Niloofar.ttf',
//                    ],
//                ],
//                'default_font' => 'xbniloofar',
//                'useKashida' => 75,
//            ]);
//
//            $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
//
//            $mpdf->WriteHTML($html);
//            return $mpdf->Output('test.pdf', 'I');
//        }
    }

    public function export($id)
    {
        $data = $this->model->findOrFail($id);

        $mpdf = new Mpdf([
            'tempDir' => public_path('export/tmp'),
            'format' => 'A5',
            'orientation' => 'L',
            'margin_left' => 2,
            'margin_right' => 2,
            'margin_top' => 2,
            'margin_bottom' => 2,
            'mode' => 'utf-8',
            'useOTL' => true,
            'useKashida' => 75,
            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], [
                public_path('export/fonts'),
            ]),
            'fontdata' => (new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'] + [
                    'vazir' => [
                        'R' => 'Vazir.ttf',
                        'useOTL' => 0xFF,
                        'useKashida' => 75,
                    ],

                ],
            'default_font' => 'vazir',
        ]);

       /*return */$html = view('bolmanager::admin.pdf', compact('data'))->render();
        $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
        $mpdf->WriteHTML($html);
        return $mpdf->Output('document.pdf', 'I');

    }
}
