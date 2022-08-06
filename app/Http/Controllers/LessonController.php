<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $others = Course::other()->get();
        $lesson = Lesson::find($id);
        $course = $lesson->course;
        $tags = $course->tags;

        return view('lessons.show', compact(
            'course',
            'lesson',
            'tags',
            'others',
        ));
    }
}
