<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
            $query->where('name', 'LIKE', "%{$request["keyword"]}%")->orWhere('description', 'LIKE', "%{$request["keyword"]}%");
        }

        if (isset($request["teacher"]) && !empty($request["teacher"])) {
            $courseIds = User::find($request["teacher"])->courses()->pluck('id');
            $query->whereIn('id', $courseIds);
        }

        if (isset($request["total_lesson"]) && !empty($request["total_lesson"])) {
            $query->withCount('lessons')->orderBy('lessons_count', $request['total_lesson']);
        }

        if (isset($request["learn_time"]) && !empty($request["learn_time"])) {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $request["learn_time"]);
        }

        if (isset($request["learners"]) && !empty($request["learners"])) {
            $query->withCount('users')->orderBy('users_count', $request["learners"]);
        }

        if (isset($request["rate"]) && !empty($request["rate"])) {
            $query->withCount('reviews')->orderBy('reviews_count', $request["rate"]);
        }

        if (isset($request["tag"]) && !empty($request["tag"])) {
            $courseIds = Tag::find($request["tag"])->courses()->pluck('id');
            $query->whereIn('id', $courseIds);
        }

        if (isset($request["created_time"]) && !empty($request["created_time"])) {
            $query->orderBy('created_at', $request["created_time"]);
        }

        return $query;
    }
}
