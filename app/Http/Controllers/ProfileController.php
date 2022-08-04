<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class ProfileController extends Controller
{

    public function show()
    {
        $currentUserId = auth()->id();
        $user = User::find($currentUserId);
        $courses = $user->courses;
        return view('users.index', compact('user', 'courses'));
    }

    public function update(StoreUserRequest $request)
    {
        $currentUserId = auth()->id();
        $user = User::find($currentUserId);
        $user->edit($request);
        return $this->show();
    }
}
