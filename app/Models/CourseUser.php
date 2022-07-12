<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'course_user';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id',
        'course_id',
        'registration_date',
    ];
}
