<?php

namespace Modules\Auth\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Http\Requests\admin\LoginAdminRequest;

class AuthController extends Controller
{
    private string $path;

    public function __construct()
    {
        $this->path = 'auth::Admin.';
    }

    public function login()
    {
        return view($this->path . 'login');
    }

    public function authenticate(LoginAdminRequest $request)
    {
        $data = $request->validated();
        $user = User::query()->where('mobile', $data['mobile'])->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'با موفقیت وارد شدید!');
        }
        return back()->withErrors([
            'email' => 'اطلاعات ورود صحیح نیست.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('login');
    }
}
