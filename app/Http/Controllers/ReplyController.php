<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReplyRequest;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store', 'destroy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReplyRequest $request)
    {
        $reply = new Reply();
        $reply['course_id'] = $request['course_id'];
        $reply['user_id'] = Auth::user()->id;
        $reply['review_id'] = $request['review_id'];
        $reply['content'] = $request['content'];

        $reply->save();
        return redirect()->route('course.show', [$request['course_id']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reply::find($id)->forceDelete();
        return redirect()->route('course.index');
    }
}
