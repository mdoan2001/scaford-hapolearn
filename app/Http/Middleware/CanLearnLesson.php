<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class CanLearnLesson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $course = Course::find($request['course_id']);
        $lesson = Lesson::find($request['lesson_id']);

        if (!$course->isJoined || $course->isFinished) {
            return redirect()->route('courses.show', [$request['course_id']]);
        }

        if ($lesson->isLearned) {
            return redirect()->route('lessons.show', [$request['lesson_id']]);
        }

        return $next($request);
    }
}
