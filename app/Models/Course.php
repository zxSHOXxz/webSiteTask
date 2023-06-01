<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function interactiveSessions()
    {
        return $this->hasMany(InteractiveSession::class);
    }
    
    public function user_reviews()
    {
        return $this->hasMany(UserReviews::class);
    }
}
