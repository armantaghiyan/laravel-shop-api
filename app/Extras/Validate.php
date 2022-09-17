<?php

namespace App\Extras;

use App\Extras\Exceptions\ValidatorException;
use Illuminate\Support\Facades\Validator;

class Validate {

    private static function checkValidation(array $array) {
        $validator = Validator::make(Request()->all(), $array);

        if ($validator->fails()) {
            throw new ValidatorException($validator->errors(), StatusCodes::HTTP_FORBIDDEN);
        }
    }

    public static function testUserApiValidator() {
        $v = [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ];

        self::checkValidation($v);
    }
}
