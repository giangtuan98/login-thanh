<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ApiResponser
{
    public function successResponse(array $data = [], ?string $message = 'OK', int $code = Response::HTTP_OK)
    {
        $response = $data;

        if (isset($message)) {
            $response = array_merge([
                'message' => $message
            ], $data);
        }

        return response()->json($response, $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json([
            'errors' => ['messages' => [$message]]
        ], $code);
    }
}
