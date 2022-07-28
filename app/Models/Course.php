<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeMain($query)
    {
        return $query->take(config('course.home_main_course_num'));
    }

    public function scopeOther($query)
    {
        return $query->orderBy('id', config('course.sort_descending'))->take(config('course.home_other_course_num'));
    }

    public function getLearnersAttribute()
    {
        return $this->users()->count();
    }

    public function getLessonsAttribute()
    {
        return $this->lessons()->count();
    }

    public function getTimesAttribute()
    {
        return $this->lessons()->sum('time');
    }

    public static function scopeSearch($query, $request)
    {
        if (isset($request["keyword"]) && !empty($request["keyword"])) {
            $query->where('name', 'LIKE', "%{$request["keyword"]}%");
        }

        if (isset($request["teacher"]) && !empty($request["teacher"])) {
            $courseIds = CourseUser::where('user_id', $request["teacher"])->pluck('course_id');
            $query->whereIn('id', $courseIds);
        }

        if (isset($request["lesson_sort"]) && !empty($request["lesson_sort"])) {
            $query->withCount('lessons')->orderBy('lessons_count', $request['lesson_sort']);
        }

        if (isset($request["time"]) && !empty($request["time"])) {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $request["time"]);
        }

        if (isset($request["user"]) && !empty($request["user"])) {
            $query->withCount('users')->orderBy('users_count', $request["user"]);
        }

        if (isset($request["review"]) && !empty($request["review"])) {
            $query->withCount('reviews')->orderBy('reviews_count', $request["review"]);
        }

        if (isset($request["tag"]) && !empty($request["tag"])) {
            $courseIds = CourseTag::where('tag_id', $request["tag"])->pluck('course_id');
            $query->whereIn('id', $courseIds);
        }

        if (isset($request["version"]) && !empty($request["version"])) {
            $query->orderBy('created_at', $request["version"]);
        }

        return $query->Paginate(Config('course.course_list_num'))->appends(request()->query());
    }
}
