<?php

namespace App\Guest\Rules;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Propaganistas\LaravelPhone\PhoneNumber;

class PhoneCountryRule implements ValidationRule, DataAwareRule
{
    protected array $data = [];

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $data = $this->data;
        $phone = new PhoneNumber($data['phone']);

        if (!$phone->isOfCountry($data['country'])) {
            $fail("Country is not a valid for phone number");
        }
    }

    public function setData(array $data): static
    {
        $this->data = $data;

        return $this;
    }
}
