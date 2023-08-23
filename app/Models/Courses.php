<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(Students::class,'courses_students');
    }
}
