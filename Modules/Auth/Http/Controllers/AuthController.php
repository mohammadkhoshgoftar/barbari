<?php

namespace Modules\Auth\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Modules\Auth\Http\Requests\admin\LoginAdminRequest;
use Modules\Auth\Http\Requests\Clint\SignUpUserRequest;
use Modules\Auth\Http\Requests\Clint\VerificationCodeRequest;
use Modules\Auth\Http\Resources\AuthResource;
use Modules\Core\Http\Resources\ErrorResource;
use Modules\User\app\Patterns\Repository\Repository\UserRepository;
use Otp;

class AuthController extends Controller
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(LoginAdminRequest $request)
    {
        try {
            $data = $request->validated();
            $response = Http::asForm()->post('http://taskmanagment.me/oauth/token', [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'EHVepPAjWqGyMTJlirIko2KOVQfdqjqxmgVkFlpV', //postgresql
                'username' => $data['email'],
                'password' => $data['password'],
                'scope' => '',
            ]);

            if (isset($response['access_token']) and $response['access_token']) {
                $user = User::query()->where('email', $request->email)->first();
                $auth['token'] = $response;
                $auth['user'] = $user;
                $message = 'نام کاربری و رمز عبور شما تایید شد';
                $data = new AuthResource($auth);
                return Response::success($message, $data);
            } else {
                $message = 'نام کاربری یا رمز عبور شما نادرست است';

                return Response::error($message, null);
            }
        } catch (\Exception $e) {
            return Response::error($e->getMessage(), null);
        }
    }

    public function signUP(SignUpUserRequest $request)
    {
        if ($this->userRepository->storeToDb($request->validated())){
            $user = User::query()->where('mobile',$request->mobile)->first();
            Otp::generateOtp($user);
            return Response::success();
        }
       return Response::error();

    }

    public function verificationCode(VerificationCodeRequest $request)
    {
        $user = User::query()->where('mobile',$request->mobile)->first();
        $token = $user->createToken('notifeto');
        return Response::success(data:$token);
    }
}
