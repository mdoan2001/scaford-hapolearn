<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CourseTag extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'course_tag';
    protected $fillable = [
        'course_id',
        'tag_id',
    ];
}
