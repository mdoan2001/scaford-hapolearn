<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'lesson_id',
        'name',
        'link',
        'type',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getIsLearnedAttribute()
    {
        return auth()->check() && $this->where('id', $this->id)->whereHas('users', function ($query) {
            $query->where('users.id', auth()->id());
        })->exists();
    }

    public function scopeCodes($query)
    {
        return $query->where('type', config('programs.type_source_code'));
    }

    public function scopeSlides($query)
    {
        return $query->where('type', config('programs.type_slide'));
    }

    public function scopeVideos($query)
    {
        return $query->where('type', config('programs.type_video'));
    }
}
