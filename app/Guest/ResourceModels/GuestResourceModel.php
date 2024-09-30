<?php

namespace App\Guest\ResourceModels;

class GuestResourceModel
{
    public string $name;

    public ?string $email;

    public string $surname;

    public string $phone;

    public ?string $country;

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'surname' => $this->surname,
            'phone' => $this->phone,
            'country' => $this->country,
        ];
    }
}
