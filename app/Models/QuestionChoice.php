<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionChoice extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }
}
