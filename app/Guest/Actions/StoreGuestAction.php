<?php

namespace App\Guest\Actions;

use App\Guest\DTOs\StoreGuestDTO;
use App\Guest\Models\Guest;
use App\Guest\Presenters\GuestPresenter;
use App\Guest\ResourceModels\GuestResourceModel;

readonly class StoreGuestAction
{
    public function __construct(
        private GuestPresenter $presenter
    ) {
    }

    public function execute(StoreGuestDTO $DTO): GuestResourceModel
    {
        return $this->presenter->present(Guest::query()->create($DTO->toArray()));
    }
}
