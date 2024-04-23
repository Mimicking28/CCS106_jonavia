<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
class DashboardController extends Controller
{
    public function show()
    {
        $students = User::all();
        return view('dashboard.dashboard', ['students' => $students]);
    }

    public function home()
    {
        $studentNumber = Student::count();
        $teacherNumber = Teacher::count();
        $courseNumber = Course::count();
        $user = User::all();
        
        return view('dashboard.dashboard', [
            'studentNumber' => $studentNumber,
            'teacherNumber' => $teacherNumber,
            'courseNumber' => $courseNumber,
            'user' => $user
        ]);
    }
}
