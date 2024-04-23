<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\TeacherRequest;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherController extends Controller
{
    /**
     * .
     * @return Response
     */
    /**
     * 
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.teachers.add');
    }

    /**
     * 
     *
     * @param TeacherRequest $request
     * @return RedirectResponse
     */

    public function store(TeacherRequest $request)
    {
        $validated = $request->validated();
        Teacher::create($validated);
        return back()->with('success', "Successful");
    }


    public function list()
    {
        $teachers = Teacher::all();
        return view('dashboard.teachers.list' ,['teachers' => $teachers]);
    }


    public function show($id)
    {
        $info = Teacher::findorfail($id);
        return view('dashboard.teachers.edit' , ['info' => $info]);
    }


    public function update(TeacherRequest $request ,$id)
    {
        $validated = $request->validated();
        $info = Teacher::findorfail($id);
        $info -> update($validated);
        return redirect('/dashboard/teachers/list')->with('success', "Successful");
    }


    public function destroy($id)
    {
        $teacher = Teacher::findorfail($id);
        $teacher -> delete();
        return back()->with('success', 'User has been deleted');
    }
}
