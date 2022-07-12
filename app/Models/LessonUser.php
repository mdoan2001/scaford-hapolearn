<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lesson_user';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id',
        'lesson_id',
        'registration_date'
    ];
}
