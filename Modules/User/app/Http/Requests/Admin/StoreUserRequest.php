<?php

namespace Modules\User\app\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'mobile' => ['required','digits:11'],
            'email' => ['nullable','email'],
            'role_id' => ['bail','required','exists:roles,id'],
            'password' => ['nullable','string'],
            'password_confirm' => ['nullable','string'],
        ];
    }
}
