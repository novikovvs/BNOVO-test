<?php

namespace App\Guest\Actions;

use App\Guest\DTOs\UpdateGuestDTO;
use App\Guest\Presenters\GuestPresenter;
use App\Guest\Queries\GuestQueries;
use App\Guest\ResourceModels\GuestResourceModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

readonly class UpdateGuestAction
{
    public function __construct(
        private GuestQueries   $guestQueries,
        private GuestPresenter $presenter,
    )
    {
    }

    /**
     * @throws \Throwable
     */
    public function execute(UpdateGuestDTO $DTO): GuestResourceModel
    {
        $guest = $this->guestQueries->findById($DTO->id);

        if (!$guest) {
            throw new ModelNotFoundException();
        }

        $guest->updateOrFail($DTO->toArray());
        return $this->presenter->present($guest);
    }
}
