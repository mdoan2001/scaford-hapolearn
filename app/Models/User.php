<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\Services\UserService;

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
        'about'
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

    public function getIsTeacherAttribute()
    {
        return $this->role == config('users.teacher_role');
    }

    public function getExperienceAttribute()
    {
        return Carbon::parse($this['created_at'])->diff(Carbon::now())->format('%y');
    }

    public function isYou()
    {
        return auth()->check() && auth()->user()->id == $this->id;
    }

    public function getDateAttribute()
    {
        return date(config('users.date_format'), strtotime($this->birthday));
    }

    public function edit($data)
    {
        if (!empty($data['name'])) {
            $this['full_name'] = $data['name'];
        }

        if (!empty($data['email'])) {
            $this['email'] = $data['email'];
        }

        if (!empty($data['birthday'])) {
            $this['birthday'] = $data['birthday'];
        }

        if (!empty($data['phone'])) {
            $this['telephone'] = $data['phone'];
        }

        if (!empty($data['address'])) {
            $this['address'] = $data['address'];
        }

        if (!empty($data['about'])) {
            $this['about'] = $data['about'];
        }

        if (!empty($data['avatar'])) {
            $path = UserService::handleUploadedImage($data->file('avatar'));
            $this['avatar'] = substr($path, strlen('public/'));
        }

        $this->save();
    }
}
