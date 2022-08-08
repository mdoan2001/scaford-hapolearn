<?php

namespace App\Services;

class UserService
{
    public static function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $path = $image->store('public/profile');
            return substr($path, strlen('public/'));
        }
    }
}
