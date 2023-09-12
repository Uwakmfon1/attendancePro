<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;


    protected $table = 'attendance';

    protected $guarded = [];

    protected $casts = [
        'present' => 'boolean'
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}
