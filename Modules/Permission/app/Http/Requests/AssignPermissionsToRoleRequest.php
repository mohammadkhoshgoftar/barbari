<?php

namespace Modules\Permission\app\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AssignPermissionsToRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'permissions' => ['required', 'array'],
        ];
    }

    public function messages(): array
    {
        return [
            'role_id.required' => ' نقش فیلد اجباری است',
            'role_id.exists' => 'نقشی وجود ندارد',
            'permissions.required' => 'سطح دسترسی اجباری است',
            'permissions.array' => 'سظح دسترسی ها باید به صورت آرایه ارسال شوند'
        ];
    }
}
