<?php

namespace App\Guest\Factories;

use App\Guest\DTOs\StoreGuestDTO;
use App\Guest\Requests\StoreGuestRequest;
use Propaganistas\LaravelPhone\PhoneNumber;

class StoreGuestFactory
{
    public static function fromRequest(StoreGuestRequest $request): StoreGuestDTO
    {
        $dto = new StoreGuestDTO();

        $dto->phone = $request->get('phone');
        $dto->email = $request->get('email');
        $dto->country = $request->get('country');
        $dto->name = $request->get('name');
        $dto->surname = $request->get('surname');
        $dto->country = $request->get('country') ?? (new PhoneNumber($dto->phone))->getCountry();

        return $dto;
    }
}
