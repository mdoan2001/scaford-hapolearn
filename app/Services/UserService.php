<?php

namespace App\Services;

class UserService
{
    public static function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            return $image->store('public/profile');
        }
    }
}
