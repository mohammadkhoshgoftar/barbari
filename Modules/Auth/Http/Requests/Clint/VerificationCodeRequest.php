<?php

namespace Modules\Auth\Http\Requests\Clint;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class VerificationCodeRequest extends FormRequest
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
            'code' => ['required', 'string'],
            'mobile' => ['required', 'digits:11', 'exists:users,mobile'],

        ];
    }

    public function messages(): array
    {
        return [
            'mobile.required' => ' ایمیل را وارد کنید',
            'mobile.exists' => 'ایمیل یا رمز عبور شما اشتباه است',
            'password.required' => 'رمز عبور را وارد کنید',
        ];
    }
}