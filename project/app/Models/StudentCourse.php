<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class StudentCourse extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'student_courses';

    protected $fillable = [
        'students_id',
        'courses_id',
    ];

}
