<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\CourseTag;
use App\Models\Tag;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teachers = User::teachers()->get();
        $tags = Tag::get();
        $courses = Course::query()->withSum('lessons', 'time')->withCount('lessons', 'users', 'reviews');
        $requests = $request->all();

        if (!empty($request->submit)) {
            if (!empty($request->search)) {
                $courses = $courses->where('name', 'LIKE', "%{$request->search}%");
            }

            if ($request->teacher != 0) {
                $courseUser = CourseUser::where('user_id', $request->teacher)->select('course_id')->get()->toArray();
                $course_ids = [];
                foreach ($courseUser as $item) {
                    $course_ids[] = $item['course_id'];
                }
                $courses = $courses->whereIn('id', $course_ids);
            }

            if ($request->lesson_sort != 0) {
                $courses = $courses->orderBy('lessons_count', $request->lesson_sort);
            }

            if ($request->time != 0) {
                $courses = $courses->orderBy('lessons_sum_time', $request->time);
            }

            if ($request->user != 0) {
                $courses = $courses->orderBy('users_count', $request->user);
            }

            if ($request->review != 0) {
                $courses = $courses->orderBy('reviews_count', $request->review);
            }

            if ($request->tag != 0) {
                $courseTag = CourseTag::where('tag_id', $request->tag)->select('course_id')->get()->toArray();
                $course_ids = [];
                foreach ($courseTag as $item) {
                    $course_ids[] = $item['course_id'];
                }
                $courses = $courses->whereIn('id', $course_ids);
            }

            if (!empty($request->btn)) {
                $courses = $courses->orderBy('created_at', $request->btn);
            }
        }

        $courses = $courses->simplePaginate(6)->appends(request()->query());
        return view('list_course', compact('courses', 'teachers', 'tags', 'requests'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
