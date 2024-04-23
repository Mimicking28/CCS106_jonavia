<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseStudentRequest;
use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Post;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('dashboard.courses.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CourseRequest $request
     * @return RedirectResponse
     */

     public function store()
     {
        $student = Course::create([
            'course_name' => request()->get('course_name', ''),
            'unit' => request()->get('unit', ''),
            'location' => request()->get('location', ''),
            'schedule' => request()->get('schedule', ''),
        ]);

        return redirect()->route('course')->with('success', 'Sucessfully Registered!');
    }


    public function  list()
    {
        $course = Course::all();
        return view('dashboard.courses.list' ,['course' => $course]);
    }

    public function show($id)
    {
        $course = Course::findorfail($id);
        return view('dashboard.courses.edit' , ['course' => $course]);
    }


    public function update(CourseRequest $request ,$id)
    {
        $validated = $request->validated();
        $course = Course::findorfail($id);
        $course -> update($validated);
        $request->session()->regenerate();
        return redirect('/dashboard/courses/list')->with('success', "Successful");
    }


    public function destroy($id)
    {
        $course = Course::findorfail($id);
        $course -> delete();
        return back()->with('success' , 'Course has been deleted');
    }



}
