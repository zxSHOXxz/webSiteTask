<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trainer extends Authenticatable
{
    use HasFactory;

    public function interactiveSessions()
    {
        return $this->belongsToMany(InteractiveSession::class, 'interactive_session_trainer', 'trainer_id', 'interactive_session_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
