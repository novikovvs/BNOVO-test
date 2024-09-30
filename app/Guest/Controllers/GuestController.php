<?php

namespace App\Guest\Controllers;

use App\Guest\Actions\DestroyGuestAction;
use App\Guest\Actions\ShowGuestAction;
use App\Guest\Actions\UpdateGuestAction;
use App\Guest\Factories\StoreGuestFactory;
use App\Guest\Factories\UpdateGuestFactory;
use App\Guest\Models\Guest;
use App\Guest\Presenters\GuestPresenter;
use App\Guest\Requests\StoreGuestRequest;
use App\Guest\Requests\UpdateGuestRequest;
use App\Http\Controllers\BaseController;
use App\Guest\Actions\StoreGuestAction;
use Illuminate\Http\JsonResponse;

class GuestController extends BaseController
{
    public function show(int $guestId, ShowGuestAction $action): JsonResponse
    {
        return $this->success($action->execute($guestId));
    }

    public function store(StoreGuestRequest $request, StoreGuestAction $action): JsonResponse
    {
        return $this->success($action->execute(StoreGuestFactory::fromRequest($request)));
    }

    public function update(int $guestId, UpdateGuestRequest $request, UpdateGuestAction $action): JsonResponse
    {
        return $this->success($action->execute(UpdateGuestFactory::fromRequest($request, $guestId)));
    }

    public function destroy(int $guestId, DestroyGuestAction $action): JsonResponse
    {
        $action->execute($guestId);
        return $this->success(true);
    }
}
