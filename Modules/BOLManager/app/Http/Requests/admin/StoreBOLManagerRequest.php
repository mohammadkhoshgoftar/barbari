<?php

namespace Modules\BOLManager\app\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreBOLManagerRequest extends FormRequest
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
            'sender_name' => ['required', 'string', 'max:255'],
            'sender_national_code' => ['required', 'string', 'max:20'],
            'sender_postal_code' => ['required', 'string', 'max:20'],
            'sender_address' => ['required', 'string'],

            'receiver_name' => ['required', 'string', 'max:255'],
            'receiver_national_code' => ['required', 'string', 'max:20'],
            'receiver_postal_code' => ['required', 'string', 'max:20'],
            'receiver_address' => ['required', 'string'],

            'waybill_date' => ['required', 'date'],
            'waybill_time' => ['required', 'date_format:H:i'],
//            'waybill_number' => ['required', 'string', 'max:255', 'unique:waybills,waybill_number'],

            'insurance_contract_number' => ['required', 'string', 'max:255'],
            'insurance_company_name' => ['required', 'string', 'max:255'],
            'insurance_value' => ['required', 'numeric', 'min:0'],

            'drivers' => ['required', 'array'],
            'drivers.*.driver_national_code' => ['required', 'string', 'max:20'],
            'drivers.*.driver_name' => ['required', 'string', 'max:255'],
            'drivers.*.fleet_card_number' => ['required', 'string', 'max:50'],
            'drivers.*.fleet_plate' => ['required', 'string', 'max:50'],
            'drivers.*.driver_license_number' => ['required', 'string', 'max:50'],
            'drivers.*.driver_mobile' => ['required', 'string', 'max:20'],

            'cargos' => ['required', 'array'],
            'cargos.*.cargo_name' => ['required', 'string', 'max:255'],
            'cargos.*.cargo_weight' => ['required', 'numeric', 'min:0'],
            'cargos.*.cargo_quantity' => ['required', 'integer', 'min:1'],
            'cargos.*.cargo_packaging' => ['required', 'string', 'max:255'],

            'loading_origin' => ['required', 'string', 'max:255'],
            'unloading_destination' => ['required', 'string', 'max:255'],
        ];
    }
    protected function prepareForValidation(): void
    {
        $this->merge([
            'insurance_value' => str_replace(',', '', $this->insurance_value),
        ]);
    }
}