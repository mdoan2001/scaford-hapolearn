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

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teachers()
    {
        return $this->users()->teachers();
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
        return $this->users()->where('role', '<>', config('users.teacher_role'))->count();
    }

    public function getLessonsAttribute()
    {
        return $this->lessons()->count();
    }

    public function getTimesAttribute()
    {
        return $this->lessons()->sum('time');
    }

    public function getZeroStarsAttribute()
    {
        return $this->reviews()->where('star', '0')->count();
    }

    public function getOneStarsAttribute()
    {
        return $this->reviews()->where('star', '1')->count();
    }

    public function getTwoStarsAttribute()
    {
        return $this->reviews()->where('star', '2')->count();
    }

    public function getThreeStarsAttribute()
    {
        return $this->reviews()->where('star', '3')->count();
    }

    public function getFourStarsAttribute()
    {
        return $this->reviews()->where('star', '4')->count();
    }

    public function getFiveStarsAttribute()
    {
        return $this->reviews()->where('star', '5')->count();
    }

    public function getIsJoinedAttribute()
    {
        if (auth()->check() && $this->users()->where('id', auth()->user()->id)->count() > 0) {
            return true;
        }
        return false;
    }

    public function getAvgStarsAttribute()
    {
        $sum = $this->reviews->sum('star');
        $num = $this->reviews->count();

        return $num == 0 ? 0 : round($sum / $num, 1);
    }

    public static function scopeSearch($query, $request)
    {
        if (isset($request["keyword"]) && !empty($request["keyword"])) {
            $query->where('name', 'LIKE', "%{$request["keyword"]}%")->orWhere('description', 'LIKE', "%{$request["keyword"]}%");
        }

        if (isset($request["teachers"]) && !empty($request["teachers"])) {
            $query->whereHas('users', function ($query) use ($request) {
                $query->whereIn('user_id', $request['teachers']);
            });
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

        if (isset($request["tags"]) && !empty($request["tags"])) {
            $query->whereHas('tags', function ($query) use ($request) {
                $query->whereIn('tag_id', $request['tags']);
            });
        }

        if (isset($request["created_time"]) && !empty($request["created_time"])) {
            $query->orderBy('courses.created_at', $request["created_time"]);
        }

        return $query;
    }
}
