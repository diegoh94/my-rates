<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'date' => 'required|date_format:Y-m-d|after_or_equal:now',
            // 'file' => 'required|mimes:csv,txt,xlsx,xls,application/octet-stream'            
            // 'file' => 'required|mimes:csv,txt,xlsx,xls,application/octet-stream'            
        ];
    }

    public function messages()
    {
        return [
            // 'file.mimes' => 'You must upload an excel file: csv,xlsx,xls'
        ];
    }
}
