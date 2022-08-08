<?php

namespace App\Services;

class UserService
{
    public static function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $path = $image->store(config('users.avatar_path'));
            return 'storage/' . substr($path, strlen(config('users.public_path')));
        }
    }
}
