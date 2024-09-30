<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class BaseController
{
    public function success(mixed $data = null, int $statusCode = 200, ?string $message = 'success'): JsonResponse
    {
        return response()->json(
            [
                "status" => "true",
                "result" => $data,
                'message' => $message,
            ],
            $statusCode,
        );
    }

    public function fail(mixed $data = null, int $statusCode = 500, ?string $message = null): JsonResponse
    {
        return response()->json(
            [
                "status" => "false",
                "result" => $data,
                'message' => $message,
            ],
            $statusCode,
        );

}
