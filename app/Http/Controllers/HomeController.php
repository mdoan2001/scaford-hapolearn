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
        $mainCourses = Course::get()->take(3);
        $otherCourses = Course::get()->skip(3)->take(3);
        $reviews = Review::with('user', 'course')->get()->take(5);
        $countCourse = Course::count();
        $countLession = Lesson::count();
        $learners = CourseUser::countRegistered();

        return view('home', compact('mainCourses', 'otherCourses', 'reviews', 'learners', 'countCourse', 'countLession'));
    }
}
