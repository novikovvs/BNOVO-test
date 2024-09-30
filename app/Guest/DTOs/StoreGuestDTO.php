<?php

namespace App\Guest\DTOs;

use App\Guest\Models\Guest;

class StoreGuestDTO
{
    public string $name;

    public ?string $email = null;

    public string $surname;

    public string $phone;

    public ?string $country = null;

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
