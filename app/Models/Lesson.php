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

    public function documents()
    {
        return $this->programs()->documents();
    }

    public function pdfs()
    {
        return $this->programs()->pdfs();
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
        $countProgramsLearned = Program::whereHas('users', function ($query) {
            $query->where('users.id', auth()->id())->where('programs.lesson_id', $this->id);
        })->count();

        $countTotalPrograms = $this->programs->count();

        return $countTotalPrograms == 0 ? 0 : round(($countProgramsLearned / $countTotalPrograms) * 100, 2);
    }
}
