<?php

namespace App\Guest\Queries;

use App\Guest\Models\Guest;

class GuestQueries
{
    public function findById(int $guestId): ?Guest
    {
        return Guest::query()->find($guestId);
    }
}
