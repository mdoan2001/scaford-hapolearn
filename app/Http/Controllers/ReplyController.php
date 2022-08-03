<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Http\Requests\StoreReplyRequest;
use App\Http\Requests\UpdateReplyRequest;

class ReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReplyRequest $request)
    {
        $data = [
            'course_id' => $request['course_id'],
            'user_id' => auth()->user()->id,
            'review_id' => $request['review_id'],
            'content' => $request['content'],
        ];
        Reply::create($data);
        return redirect()->route('courses.show', [$request['course_id']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReplyRequest $request, $id)
    {
        $reply = Reply::find($id);
        if ($this->isValid($request, $reply['user_id'], $reply['course_id'], $reply['review_id'])) {
            $reply['content'] = $request['comment'];
            $reply->save();
        }
        return redirect()->route('courses.show', [$request['course_id']]);
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
        return redirect()->route('courses.index');
    }

    private function isValid(UpdateReplyRequest $request, $course_id, $user_id, $review_id)
    {
        if ($course_id == $request['course_id'] && $user_id == auth()->id() && $review_id == $request['review_id']) {
            return true;
        }
        return false;
    }
}
