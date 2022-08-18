<?php

namespace App\Http\Controllers;

use App\Models\Course;
use \App\Http\Requests\StoreCourseUserRequest;
use App\Models\CourseUser;
use Illuminate\Http\Request;

class CourseUserController extends Controller
{
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
        toastr()->info(__('message.register_course_success'), ['timeOut' => 1000]);
        return redirect()->route('courses.show', [$request['course_id']]);
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
        $course = Course::find($id);
        $course->users()->updateExistingPivot(auth()->id(), ['deleted_at' => null]);
        toastr()->info(__('message.rejoin_course_success'), ['timeOut' => 1000]);
        return redirect()->route('courses.show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseUser::where('course_id', $id)->where('user_id', auth()->id())->delete();
        toastr()->warning(__('message.finish_course'), ['timeOut' => 1000]);
        return redirect()->route('courses.show', [$id]);
    }
}
