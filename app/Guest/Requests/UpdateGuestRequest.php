<?php

namespace App\Guest\Requests;

use App\Guest\Rules\PhoneCountryRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'phone' => 'phone:INTERNATIONAL',
            'name' => 'string',
            'email' => 'email|unique:guests,email',
            'surname' => 'string',
            'country' => new PhoneCountryRule(),
        ];
    }
}
