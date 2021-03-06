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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
