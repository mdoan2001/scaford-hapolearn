<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        $lesson = Lesson::find($request['lesson_id']);

        if ($lesson->isLearned()) {
            return redirect()->route('lessons.show', [$request['lesson_id']]);
        }

        return $next($request);
    }
}
