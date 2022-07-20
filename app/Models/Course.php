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

    public function sumTimeLesson($id)
    {
        $lessons = Lesson::where('course_id', $id)->get();
        $sumTime = 0;
        foreach ($lessons as $value) {
            $sumTime += $this->seconds($value->time);
        }
        return round($sumTime / 3600);
    }

    public function seconds($time)
    {
        $data = explode(':', $time);
        return $data[0] * 3600 + $data[1] * 60 + $data[2];
    }
}
