<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::find($id);
        return redirect($program->link);
    }
}
