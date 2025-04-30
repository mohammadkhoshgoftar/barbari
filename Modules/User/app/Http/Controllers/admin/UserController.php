<?php

namespace Modules\User\app\Http\Controllers\admin;

use Modules\User\app\Http\Requests\Admin\AddInitialDebtToUserRequest;
use Modules\User\app\Patterns\Repository\Repository\UserRepository;
use Modules\User\app\Http\Requests\Admin\ChangeUserPasswordRequest;
use Modules\User\app\Http\Requests\Admin\UpdateUserRequest;
use Modules\User\app\Http\Requests\Admin\StoreUserRequest;
use Yajra\DataTables\Facades\DataTables;
use Modules\Payment\app\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Modules\Factor\app\Models\Factor;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    private UserRepository $userRepository;
    private string $path;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->path = 'user::admin.';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view($this->path . 'index');
    }

    public function data()
    {
        $users = User::query()->select(['id', 'name', 'email', 'created_at', 'mobile']);

        return DataTables::eloquent($users)
            ->addColumn('action', function ($user) {
                return '
                        <div class="dropdown d-inline-block">
                        <a class="btn btn-link no-caret" data-bs-toggle="dropdown">
                                <i class="fa-light fa-gear fs-5"></i>
                                </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="' . route('edit.user', $user->id) . '">
                                <i class="fal fa-pen-to-square"></i>
                                ویرایش
                                </a></li>
                                <li><a class="dropdown-item theme-red" href="' . route('admin.user.destroy', $user->id) . '">
                                <i class="fal fa-trash"></i>
                                حذف
                                </a></li>
                            </ul>
                        </div>';
            })
            ->addColumn('created_at', function ($user) {
                return $user->created_at->toJalali()->format('Y/m/d');
            })
            ->addColumn('role', function ($user) {
                return @$user->getRoleNames()[0];
            })
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::query()->where('id', '!=', 1)->get();
        return view($this->path . 'create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        if ($this->userRepository->storeToDb($request->all()))
            return back()->with(['status' => 'success', 'toast_message' => 'کابر شما با موفقیت ایجاد شد!']);
        else
            return back()->with(['status' => 'error', 'toast_message' => 'ایجاد کاربر با خطا روبه رو شد!']);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $item = $this->userRepository->getItemById($id);
        $roles = Role::query()->where('id', '!=', 1)->get();
        $factorCount = Factor::query()->where('user_id', $item->id)->count();
        $paymentCount = Payment::query()->where('user_id', $item->id)->count();
        $amountPaid = Payment::query()->where('user_id', $item->id)->sum('price');
        $totalBalance = Factor::query()->where('user_id', $item->id)->sum('total_calculated');
        $discountReceived = $totalBalance - Factor::query()->where('user_id', $item->id)->sum('total_amount');
        $debt = $totalBalance - $amountPaid + $item->initial_debt;
        return view($this->path . 'edit', compact('item', 'roles', 'factorCount', 'paymentCount', 'amountPaid', 'totalBalance', 'discountReceived','debt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $result = $this->userRepository->updateToDb($request->validated(), $id);
        if ($result)
            return back()->with(['status' => 'success', 'toast_message' => 'کابر شما با موفقیت به روز شد!']);
        else
            return back()->with(['status' => 'error', 'toast_message' => 'به روز رسانی کاربر با خطا روبه رو شد!']);

//        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = $this->userRepository->deleteToDb($id);
        if ($result) {
            return back()->with(['status' => 'success', 'toast_message' => 'کابر شما با موفقیت حذف شد!']);
        } else {
            return back()->with(['status' => 'error', 'toast_message' => 'حذف کاربر با خطا روبه رو شد!']);
        }
    }

    public function changePsw(ChangeUserPasswordRequest $request): RedirectResponse
    {
        $result = $this->userRepository->changePassword($request['user_id'], $request['password']);
        if ($result) {
            return back()->with(['status' => 'success', 'toast_message' => 'رمزعبور با موفقیت تغییر کرد!']);
        } else {
            return back()->with(['status' => 'error', 'toast_message' => 'تغییر رمزعبور با خطا روبه رو شد!']);
        }
    }

    public function search(\Illuminate\Http\Request $request)
    {
        return $this->userRepository->searchInProducts($request->name);
    }

    public function addInitialDebt(AddInitialDebtToUserRequest $request, $id): RedirectResponse
    {
        $result = $this->userRepository->updateToDb($request->validated(), $id);
        if ($result)
            return back()->with(['status' => 'success', 'toast_message' => 'با موفقیت اضافه شد!']);
        else
            return back()->with(['status' => 'error', 'toast_message' => 'با خطا روبه رو شد!']);
    }
}
