<?php

namespace App\Services;

class UserService
{
    public static function handleUploadImage($image)
    {
        if (isset($image)) {
            $path = $image->store(config('users.avatar_path'));
            return config('users.storage_path') . substr($path, strlen(config('users.public_path')));
        }
    }
}
