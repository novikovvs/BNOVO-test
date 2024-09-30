<?php

namespace App\Guest\Actions;

use App\Guest\Presenters\GuestPresenter;
use App\Guest\Queries\GuestQueries;
use App\Guest\ResourceModels\GuestResourceModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

readonly class ShowGuestAction
{
    public function __construct(
        private GuestPresenter $presenter,
        private GuestQueries   $queries,
    )
    {
    }

    public function execute(int $guestId): GuestResourceModel
    {
        $guest = $this->queries->findById($guestId);

        if (!$guest) {
            throw new ModelNotFoundException();
        }

        return $this->presenter->present($guest);
    }
}
