<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = ['sub_chapters_id', 'title', 'body', 'source'];
    public function SubChapter(){
        return $this->belongsTo(SubChapter::class, 'sub_chapters_id');
    }
}
