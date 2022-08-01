<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;

class ReviewController extends Controller
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
    public function store(StoreReviewRequest $request)
    {
        $review = Review::create([
            'course_id' => $request['course_id'],
            'user_id' => auth()->user()->id,
            'star' => $request['vote'],
            'content' => $request['comment'],
        ]);

        $review->save();
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
        Review::find($id)->forceDelete();
        return redirect()->route('course.index');
    }
}
