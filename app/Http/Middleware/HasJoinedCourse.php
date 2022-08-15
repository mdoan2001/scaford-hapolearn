<?php

namespace App\Http\Middleware;

use App\Models\Lesson;
use Closure;
use Illuminate\Http\Request;

class HasJoinedCourse
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
        $lesson = Lesson::find($request['lesson_id']);
        $course = $lesson->course;

        if (!$course->isJoined() || $course->isFinished()) {
            return redirect()->route('courses.show', $course->id);
        }

        return $next($request);
    }
}
