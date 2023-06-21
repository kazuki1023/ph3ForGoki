<?php 
// Quiz.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Quiz extends Model
{
    protected $fillable = [
        'name',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
