<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonUserRequest;

class LessonUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLessonUserRequest $request)
    {
        $lesson = Lesson::find($request['lesson_id']);
        $lesson->users()->attach(auth()->id());
        return redirect()->route('lessons.show', [$request['lesson_id']]);
    }
}
