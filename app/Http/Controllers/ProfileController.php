<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\StoreUserRequest;

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
    public function update(StoreUserRequest $request, $id)
    {
        if (!empty($request['image'])) {
            $request['avatar'] = UserService::handleUploadImage($request->file('image'));
        }

        auth()->user()->update(array_filter($request->all()));
        toastr()->info(__('message.update_success'), ['timeOut' => 1000]);
        return redirect()->route('profile.index');
    }
}
