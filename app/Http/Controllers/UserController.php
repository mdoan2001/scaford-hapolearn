<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $courses = $user->courses;
        return view('users.index', compact('user', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        $user = User::find($id);
        if (!empty($request['name'])) {
            $user['full_name'] = $request['name'];
        }

        if (!empty($request['email'])) {
            $user['email'] = $request['email'];
        }

        if (!empty($request['birthday'])) {
            $user['birthday'] = $request['birthday'];
        }

        if (!empty($request['phone'])) {
            $user['telephone'] = $request['phone'];
        }

        if (!empty($request['address'])) {
            $user['address'] = $request['address'];
        }

        if (!empty($request['about'])) {
            $user['about'] = $request['about'];
        }

        if (!empty($request['avatar'])) {
            $path = $request->file('avatar')->store('public/profile');
            $user['avatar'] = substr($path, strlen('public/'));
        }

        $user->save();

        return redirect()->route('user.index');
    }
}
