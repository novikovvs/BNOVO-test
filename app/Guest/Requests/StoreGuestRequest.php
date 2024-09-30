<?php

namespace App\Guest\Requests;

use App\Guest\Rules\PhoneCountryRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'phone' => 'required|unique:guests,phone|phone:INTERNATIONAL,custom_country_field',
            'name' => 'required',
            'email' => 'email|unique:guests,email',
            'surname' => 'required',
            'country' => new PhoneCountryRule(),
        ];
    }
}
