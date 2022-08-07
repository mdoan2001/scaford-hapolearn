<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Course;

class CanLearnProgram
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
        $program = Program::find($request['program_id']);

        if (!$course->isJoined || $course->isFinished) {
            return redirect()->route('courses.show', [$request['course_id']]);
        }

        if ($program->isLearned) {
            return redirect()->route('programs.show', [$request['program_id']]);
        }

        return $next($request);
    }
}
