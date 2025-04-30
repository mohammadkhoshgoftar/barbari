<?php

namespace Modules\BOLManager\app\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Modules\BOLManager\app\Http\Requests\admin\StoreBOLManagerRequest;
use Modules\BOLManager\app\Http\Requests\admin\UpdateBOLManagerRequest;
use Modules\BOLManager\app\Models\Waybills;
use Modules\BOLManager\app\Patterns\Repository\BOLManagerRepository;
use Yajra\DataTables\Facades\DataTables;

class BOLManagerController extends Controller
{

    private BOLManagerRepository $repository;
    private string $path;

    public function __construct(BOLManagerRepository $taskRepository)
    {
        $this->repository = $taskRepository;
        $this->path = 'bolmanager::admin.';
    }

    public function index()
    {
        return view($this->path . 'index');
    }

    public function data()
    {
        $brands = Waybills::query();

        return DataTables::eloquent($brands)
            ->addColumn('action', function ($product) {
                return '
                        <div class="dropdown d-inline-block">
                        <a class="btn btn-link no-caret" data-bs-toggle="dropdown">
                                <i class="fa-light fa-gear fs-5"></i>
                                </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="' . route('admin.bol.edit', $product->id) . '">
                                <i class="fal fa-pen-to-square"></i>
                                ویرایش
                                </a></li>
                                <li><a class="dropdown-item theme-red" href="'.route('admin.bol.destroy', $product->id).'">
                                <i class="fal fa-trash"></i>
                                حذف
                                </a></li>
                            </ul>
                        </div>';
            })

            ->editColumn('drivers', function ($product) {
                return 'علی';
            })

            ->rawColumns(['action'])
            ->toJson();
    }


    public function create()
    {
        return view($this->path . 'create');
    }


    public function store(StoreBOLManagerRequest $request)
    {
        $result = $this->repository->storeToDb($request->validated());
        if ($result) {
            return back()->with(['status'=>'success' ,'toast_message'=> 'بارنامه شما با موفقیت ذخیره شد!']);
        } else {
            return back()->with(['status'=>'error' ,'toast_message'=> 'ذخیره بارنامه با خطا روبه رو شد!']);
        }
    }

    public function show($id)
    {
        return $this->repository->show($id);
    }

    public function edit($id)
    {
        $data = $this->repository->getItemById($id)->first();
        return view($this->path . 'edit', compact('data'));
    }

    public function update(UpdateBOLManagerRequest $request, $id)
    {
        $result = $this->repository->updateToDb($request->validated(), $id);
        if ($result) {
            return back()->with(['status'=>'success' ,'toast_message'=> 'بارنامه شما با موفقیت به روز شد!']);
        } else {
            return back()->with(['status'=>'error' ,'toast_message'=> 'به روزرساینی بارنامه با خطا روبه رو شد!']);
        }
    }
    public function destroy($id)
    {
        $result = $this->repository->deleteToDb($id);
        if ($result) {
            return back()->with(['status'=>'success' ,'toast_message'=> 'بارنامه شما با موفقیت حذف شد!']);
        } else {
            return back()->with(['status'=>'error' ,'toast_message'=> 'حذف بارنامه با خطا روبه رو شد!']);
        }
    }

    public function exportPdf($id)
    {
       return $this->repository->export($id);
    }
}