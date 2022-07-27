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

    public static function scopeSearch($query, $request)
    {
        $query->withCount('lessons', 'users', 'reviews')->withSum('lessons', 'time');

        if (!empty($request->submit)) {
            if (!empty($request->search)) {
                $query->where('name', 'LIKE', "%{$request->search}%");
            }

            if ($request->teacher != 0) {
                $courseUser = CourseUser::where('user_id', $request->teacher)->select('course_id')->get()->toArray();
                $courseIds = [];
                foreach ($courseUser as $item) {
                    $courseIds[] = $item['course_id'];
                }
                $query->whereIn('id', $courseIds);
            }

            if ($request['lesson_sort'] != 0) {
                $query->orderBy('lessons_count', $request['lesson_sort']);
            }

            if ($request->time != 0) {
                $query->orderBy('lessons_sum_time', $request->time);
            }

            if ($request->user != 0) {
                $query->orderBy('users_count', $request->user);
            }

            if ($request->review != 0) {
                $query->withCount('reviews')->orderBy('reviews_count', $request->review);
            }

            if ($request->tag != 0) {
                $courseTag = CourseTag::where('tag_id', $request->tag)->select('course_id')->get()->toArray();
                $courseIds = [];
                foreach ($courseTag as $item) {
                    $courseIds[] = $item['course_id'];
                }
                $query->whereIn('id', $courseIds);
            }

            if (!empty($request->btn)) {
                $query->orderBy('created_at', $request->btn);
            }
        }

        return $query->Paginate(Config('course.course_list_num'))->appends(request()->query());
    }
}
