<?php

namespace App\Extras;

class Api {

    public static function response(array $items, $statusCode = StatusCodes::HTTP_OK) {
        return response()->json([RK_STATUS => $statusCode, RK_RESULT => C_SUCCESS, ...$items], $statusCode);
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function success($statusCode = StatusCodes::HTTP_OK) {
        return response()->json([RK_STATUS => $statusCode, RK_RESULT => 'success'], $statusCode);
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function error($message, $statusCode) {
        return response()->json([RK_STATUS => $statusCode, RK_RESULT => C_ERROR, 'message' => $message], $statusCode);
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function validation_error(array $items) {
        return response()->json([RK_STATUS => StatusCodes::HTTP_NOT_ACCEPTABLE, RK_RESULT => C_ERROR_MESSAGE, ...$items], StatusCodes::HTTP_NOT_ACCEPTABLE);
    }
}
