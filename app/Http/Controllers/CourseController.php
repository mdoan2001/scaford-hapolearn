<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Reply;
use App\Models\Tag;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $teachers = User::teachers()->get();
        $tags = Tag::get();
        $courses = Course::search($data)->paginate(config('course.pagination'));
        return view('courses.index', compact('courses', 'teachers', 'tags', 'data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = $request->all();
        $others = Course::other()->get();
        $course = Course::find($id);
        $lessons = $course->getLessons($data)->get();
        $teachers = $course->getTeachers()->get();
        $tags = $course->tags()->get();
        $reviews = $course->getReviews()->get();

        return view('courses.show', compact(
            'course',
            'lessons',
            'teachers',
            'tags',
            'others',
            'reviews',
        ));
    }
}
