<?php

namespace App\Http\Controllers;

use App\Models\Course;
use \App\Http\Requests\StoreCourseUserRequest;

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
    public function store(StoreCourseUserRequest $request)
    {
        $course = Course::find($request['course_id']);
        $course->users()->attach(auth()->user()->id);
        return redirect()->route('course.show', [$request['course_id']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->users()->detach($id);
        return redirect()->route('course.show', [$id]);
    }
}
