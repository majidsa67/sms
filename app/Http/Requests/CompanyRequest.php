<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required',
            'company_email' => 'required|email',
            'password' => 'required|confirmed',
            'trend' => 'required',
            'office_address' => 'required',
            'Laboratory_address' => 'required',
            'office_phone_number' => 'required|numeric|min:8|max:11',
            'IDPay' => 'min:26|max:26',
            'Accept_rules'=>'accepted'

        ];
    }
    public function attributes()
    {
        return [
   //
        ];
    }

    public function messages()
    {
        return [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد'
        ];

    }
}
