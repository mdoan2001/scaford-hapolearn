<?php

namespace App\Http\Controllers;

use App\Models\Reply;
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
        $reply = Reply::create([
            'course_id' => $request['course_id'],
            'user_id' => auth()->user()->id,
            'review_id' => $request['review_id'],
            'content' => $request['content'],
        ]);

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
