<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_id',
        'name',
        'image',
        'time',
        'description',
        'requirement'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function codes()
    {
        return $this->programs()->codes();
    }

    public function slides()
    {
        return $this->programs()->slides();
    }

    public function videos()
    {
        return $this->programs()->videos();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function scopeSearch($query, $request)
    {
        if (isset($request['keyword']) && !empty($request['keyword'])) {
            $query->where('name', 'LIKE', "%{$request['keyword']}%");
        }
        return $query->orderBy('order', config('course.sort_ascending'));
    }

    public function getIsLearnedAttribute()
    {
        return auth()->check() && $this->where('id', $this->id)->whereHas('users', function ($query) {
            $query->where('users.id', auth()->id());
        })->exists();
    }

    public function getProgressAttribute()
    {
        $programNum = Program::whereHas('users', function ($query) {
            $query->where('users.id', auth()->id())->where('programs.lesson_id', $this->id);
        })->count();

        $programTotal = $this->programs->count();

        return $programTotal == 0 ? 0 : round(($programNum / $programTotal) * 100, 2);
    }
}
