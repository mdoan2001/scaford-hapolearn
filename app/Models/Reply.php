<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_id',
        'user_id',
        'review_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function canUpdateReply($request)
    {
        return $this['course_id'] == $request['course_id'] && $this['user_id'] == auth()->id() && $this['review_id'] == $request['review_id'];
    }

    public function isYourReply()
    {
        return auth()->check() && auth()->id() == $this->user->id;
    }
}
