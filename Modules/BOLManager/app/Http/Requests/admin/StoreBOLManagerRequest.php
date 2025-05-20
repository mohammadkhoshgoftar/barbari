<?php

namespace Modules\BOLManager\app\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Core\app\helper\HelperMethods;

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
//            'sender_address' => ['required', 'string'],

            'receiver_name' => ['required', 'string', 'max:255'],
            'receiver_national_code' => ['required', 'string', 'max:20'],
            'receiver_postal_code' => ['required', 'string', 'max:20'],
//            'receiver_address' => ['required', 'string'],

            'waybill_date' => ['required'],
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
//            'drivers.*.driver_insurance_number' => ['required', 'string', 'max:255'],
//            'drivers.*.worker_insurance_number' => ['required', 'string', 'max:255'],

            'cargos' => ['required', 'array'],
            'cargos.*.cargo_name' => ['required', 'string', 'max:255'],
            'cargos.*.cargo_weight' => ['required', 'numeric', 'min:0'],
            'cargos.*.cargo_quantity' => ['required', 'integer', 'min:1'],
            'cargos.*.cargo_packaging' => ['required', 'string', 'max:255'],


            'loading_origin' => ['required', 'string', 'max:255'],
            'unloading_destination' => ['required', 'string', 'max:255'],

            'rent_cost' => ['required', 'numeric', 'min:0'],
            'labor_cost' => ['required', 'numeric', 'min:0'],
        ];
    }
    protected function prepareForValidation(): void
    {
        $data = $this->all();

        $convertNumber = fn($value) => HelperMethods::convertPersianToEnglishNumbers(str_replace(',', '', $value));

        // فیلدهای ساده
        $data['insurance_value'] = $convertNumber($data['insurance_value'] ?? 0);
        $data['labor_cost'] = $convertNumber($data['labor_cost'] ?? 0);
        $data['rent_cost'] = $convertNumber($data['rent_cost'] ?? 0);

        // تبدیل درایورها
        if (!empty($data['drivers']) && is_array($data['drivers'])) {
            foreach ($data['drivers'] as $i => $driver) {
                if (isset($driver['driver_mobile'])) {
                    $data['drivers'][$i]['driver_mobile'] = $convertNumber($driver['driver_mobile']);
                }
            }
        }

        // تبدیل کارگوها
        if (!empty($data['cargos']) && is_array($data['cargos'])) {
            foreach ($data['cargos'] as $i => $cargo) {
                if (isset($cargo['cargo_weight'])) {
                    $data['cargos'][$i]['cargo_weight'] = $convertNumber($cargo['cargo_weight']);
                }
                if (isset($cargo['cargo_quantity'])) {
                    $data['cargos'][$i]['cargo_quantity'] = $convertNumber($cargo['cargo_quantity']);
                }
            }
        }

        $this->replace($data);
    }

}