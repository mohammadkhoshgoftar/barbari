<?php

namespace Modules\User\app\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AddInitialDebtToUserRequest extends FormRequest
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
            'initial_debt' => ['required','integer','min:0'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'initial_debt' => str_replace(',', '', $this->initial_debt),
        ]);
    }
}