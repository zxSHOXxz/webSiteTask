<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteractiveSession extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function trainers()
    {
        return $this->belongsToMany(Trainer::class, 'interactive_session_trainer', 'interactive_session_id', 'trainer_id');
    }
    
}
