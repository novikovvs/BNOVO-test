<?php

namespace App\Guest\Presenters;

use App\Guest\Models\Guest;
use App\Guest\ResourceModels\GuestResourceModel;

class GuestPresenter
{
    public function present(Guest $guest): GuestResourceModel
    {
        $resourceModel = new GuestResourceModel();

        $resourceModel->name = $guest->name;
        $resourceModel->surname = $guest->surname;
        $resourceModel->country = $guest->country;
        $resourceModel->phone = $guest->phone;
        $resourceModel->email = $guest->email;

        return $resourceModel;

    }
}
