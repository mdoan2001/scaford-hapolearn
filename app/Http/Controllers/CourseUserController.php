<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store', 'destroy');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request['course_id'])) {
            $courseUser = new CourseUser();
            $courseUser['course_id'] = $request['course_id'];
            $courseUser['user_id'] = Auth::user()->id;
            $courseUser['created_at'] = now();

            $courseUser->save();
            return redirect()->route('course.show', [$request['course_id']]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseUser::where('course_id', $id)->where('user_id', Auth::user()->id)->forceDelete();
        return redirect()->route('course.show', [$id]);
    }
}
