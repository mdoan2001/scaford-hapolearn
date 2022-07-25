<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use App\Models\CourseUser;
use App\Models\Lesson;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mainCourses = Course::main()->get();
        $otherCourses = Course::other()->orderBy('id', config('course.course_sort_descending'))->get();
        $reviews = Review::main()->get();
        $countCourse = Course::count();
        $countLession = Lesson::count();
        $learners = CourseUser::countRegistered();

        return view('home', compact('mainCourses', 'otherCourses', 'reviews', 'learners', 'countCourse', 'countLession'));
    }
}
