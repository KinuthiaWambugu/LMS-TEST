<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'level', 'duration'];
    public function chapters(){
        return $this -> hasMany(Chapter::class);
    }
    public function users(){
        return $this -> belongsToMany(User::class, 'enrollments')->withTimestamps();
    }
}
