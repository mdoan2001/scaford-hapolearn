<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'role',
        'full_name',
        'birthday',
        'telephone',
        'about',
        'address',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function scopeTeachers($query)
    {
        return $query->where('role', config('users.teacher_role'));
    }

    public function isTeacher()
    {
        return $this->role == config('users.teacher_role');
    }

    public function getExperienceAttribute()
    {
        return Carbon::parse($this['created_at'])->diff(Carbon::now())->format('%y') . ' ' . __('artribute.year_experience');
    }

    public function isYou()
    {
        return auth()->check() && auth()->user()->id == $this->id;
    }

    public function getDateAttribute()
    {
        return date(config('users.date_format'), strtotime($this->birthday));
    }

    public function getNameAttribute()
    {
        return ($this->isYou()) ? $this['full_name'] . ' (' . __('artribute.you') . ')' : $this['full_name'];
    }

    public function getPictureAttribute()
    {
        return ($this->avatar) ? $this->avatar : config('users.default_avatar');
    }
}
