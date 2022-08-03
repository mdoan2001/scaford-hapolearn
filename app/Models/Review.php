<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_id',
        'user_id',
        'content',
        'star',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function scopeMain($query)
    {
        return $query->take(config('course.home_review_num'));
    }

    public function scopReplies($query)
    {
        return $query->review()->oderBy('created_at', config('course.sort_descending'));
    }

    public function canUpdateReview($request)
    {
        if ($this['course_id'] == $request['course_id'] && $this['user_id'] == auth()->id()) {
            return true;
        }
        return false;
    }
}
