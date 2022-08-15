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

    public function isLearned()
    {
        return auth()->check() && $this->where('id', $this->id)->whereHas('users', function ($query) {
            $query->where('users.id', auth()->id());
        })->exists();
    }

    public function getClassOfIconAttribute()
    {
        $result = '';
        switch ($this->type) {
            case config('programs.type_document'):
                $result = 'fa-file-word';
                break;
            case config('programs.type_pdf'):
                $result = 'fa-file-pdf';
                break;
            default:
                $result = 'fa-file-audio';
                break;
        }
        return $result;
    }

    public function getCategoryAttribute()
    {
        $type = $this->type;
        $result = '';
        switch ($type) {
            case config('programs.type_document'):
                $result = 'Document';
                break;
            case config('programs.type_pdf'):
                $result = 'PDF';
                break;
            default:
                $result = 'Video';
                break;
        }
        return $result;
    }
}
