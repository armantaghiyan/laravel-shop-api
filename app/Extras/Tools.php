<?php

namespace App\Extras;

use Illuminate\Support\Facades\Storage;

class Tools {

    public static function genarateToken($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function genarateNumber($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomNumbers = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumbers .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomNumbers;
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function saveImage($path, $file, $disk = D_PUBLIC) {
        return Storage::disk($disk)->put($path, $file);
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function deleteFile($path, $disk) {
        if (Storage::disk($disk)->exists($path)) {
            Storage::disk($disk)->delete($path);
        }
    }

    //------------------------------------------------------------------------------------------------------------------
    public static function urlFile($disk) {


    }
}
