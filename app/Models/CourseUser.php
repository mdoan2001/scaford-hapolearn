<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'course_user';

    protected $fillable = [
        'user_id',
        'course_id',
        'registration_date',
    ];

    public static function countRegistered()
    {
        return self::select('user_id')->groupBy('user_id')->get()->count();
    }
}
