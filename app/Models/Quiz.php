<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['sub_chapters_id', 'title'];
    
    public function subChapter(){
        return $this->belongsTo(SubChapter::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function results(){
        return $this->hasMany(QuizResult::class);
    }

}
