<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Http\Requests\StoreProgramUserRequest;

class ProgramUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramUserRequest $request)
    {
        $program = Program::find($request['program_id']);
        $program->users()->attach(auth()->id());
        return redirect()->route('programs.show', [$request['program_id']]);
    }
}
