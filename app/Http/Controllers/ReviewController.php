<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {
        $data = [
            'course_id' => $request['course_id'],
            'user_id' => auth()->user()->id,
            'star' => $request['vote'],
            'content' => $request['comment'],
        ];
        Review::create($data);
        return redirect()->route('courses.show', [$request['course_id']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, $id)
    {
        $review = Review::find($id);
        if ($review->canUpdateReview($request)) {
            $review['content'] = $request['comment'];
            $review->save();
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
        Review::find($id)->forceDelete();
        return redirect()->route('courses.index');
    }
}
