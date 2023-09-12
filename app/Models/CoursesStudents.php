<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CoursesStudents extends pivot
{
    use HasFactory;
    protected  $table='courses_students';
    public $timestamps = false;
    public $primaryKey = 'course_id';


}
