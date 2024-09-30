<?php

namespace App\Guest\Factories;

use App\Guest\DTOs\StoreGuestDTO;
use App\Guest\DTOs\UpdateGuestDTO;
use App\Guest\Requests\StoreGuestRequest;
use App\Guest\Requests\UpdateGuestRequest;

class UpdateGuestFactory
{
    public static function fromRequest(UpdateGuestRequest $request, int $guestId): UpdateGuestDTO
    {
        $dto = new UpdateGuestDTO();

        $dto->id = $guestId;
        $dto->phone = $request->get('phone');
        $dto->email = $request->get('email');
        $dto->country = $request->get('country');
        $dto->name = $request->get('name');
        $dto->surname = $request->get('surname');

        return $dto;
    }
}
