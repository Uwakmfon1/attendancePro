<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Students extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $attributes = [
        'options' => '[]',
        'delayed' => false,
    ];

    public function attendance(): HasOne
    {
        return $this->hasMany(Attendance::class, 'student_id', 'id');
    }

    public function todays_attendance(): HasOne
    {
        return $this
            ->hasOne(Attendance::class, 'student_id', 'id')
            ->whereDate('date', date('Y-m-d'));
    }

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'courses_students');
    }

}

