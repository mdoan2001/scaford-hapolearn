<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class ProfileController extends Controller
{

    public function show()
    {
        $courses = auth()->user()->courses;
        return view('profile.show', compact('courses'));
    }

    public function update(StoreUserRequest $request)
    {
        auth()->user()->edit($request);
        return $this->show();
    }
}
