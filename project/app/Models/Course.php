<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use mysql_xdevapi\Table;

class Course extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [

        'course_name',
        'unit',
        'location',
        'schedule'
    ];


    public function students()
    {
        return $this->belongsToMany(Student::class , 'student_courses');
    }



}
