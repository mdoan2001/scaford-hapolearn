<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Program;

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
        $program = Program::find($request['program_id']);

        if ($program->isLearned()) {
            return redirect()->route('programs.show', [$request['program_id']]);
        }

        return $next($request);
    }
}
