<?php
// Question.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;
use App\Models\Choice;

class Question extends Model
{
    protected $fillable = [
        'image',
        'text',
        'supplement',
        'quiz_id',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
