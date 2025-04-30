<?php

namespace Modules\Auth\Http\Requests\admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'mobile' => ['required','exists:users,mobile'],
            'password' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'mobile.exists' => 'موبایل یا رمز عبور شما اشتباه است',
            'password.required' => 'رمز عبور را وارد کنید',
        ];
    }
}