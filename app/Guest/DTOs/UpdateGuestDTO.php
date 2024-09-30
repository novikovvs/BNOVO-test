<?php

namespace App\Guest\DTOs;

class UpdateGuestDTO
{
    public int $id;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $surname = null;

    public ?string $phone = null;

    public ?string $country = null;

    public function toArray(): array
    {
        return array_filter([
            'name' => $this->name,
            'email' => $this->email,
            'surname' => $this->surname,
            'phone' => $this->phone,
            'country' => $this->country,
        ]);
    }
}
