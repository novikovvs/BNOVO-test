<?php

namespace App\Guest\Actions;

use App\Guest\Queries\GuestQueries;

readonly class DestroyGuestAction
{
    public function __construct(
        private GuestQueries $queries,
    )
    {
    }

    /**
     * @throws \Throwable
     */
    public function execute(int $guestId): void
    {
        $guest = $this->queries->findById($guestId);
        $guest->deleteOrFail();
    }
}
