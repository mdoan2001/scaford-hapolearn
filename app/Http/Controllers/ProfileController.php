<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = auth()->user()->courses;
        return view('profile.show', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [];
        if (!empty($request['name'])) {
            $data['full_name'] = $request['name'];
        }

        if (!empty($request['email'])) {
            $data['email'] = $request['email'];
        }

        if (!empty($request['birthday'])) {
            $data['birthday'] = $request['birthday'];
        }

        if (!empty($request['phone'])) {
            $data['telephone'] = $request['phone'];
        }

        if (!empty($request['address'])) {
            $data['address'] = $request['address'];
        }

        if (!empty($request['about'])) {
            $data['about'] = $request['about'];
        }

        if (!empty($request['avatar'])) {
            $path = UserService::handleUploadedImage($request->file('avatar'));
            $data['avatar'] = substr($path, strlen('public/'));
        }

        auth()->user()->update($data);
        return redirect()->route('profile.index');
    }
}
