<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubChapter extends Model
{
    //
    protected $fillable = ['chapter_id', 'title'];
    public function chapter(){
        return $this -> belongsTo(Chapter::class);
    }
    public function contents(){
        return $this ->hasMany(Content::class, 'sub_chapters_id');
    }
    public function quiz(){
        return $this->hasOne(Quiz::class);
    }
}
