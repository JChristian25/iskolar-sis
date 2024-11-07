<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'enrollment_date',
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
        'date_of_birth' => 'date',
    ];
}
