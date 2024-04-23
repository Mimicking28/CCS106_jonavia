<?php

namespace App\Http\Controllers;


use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use function back;
use function view;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */

    public function create()
    {
        return view('dashboard.students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StudentRequest $request
     * @return RedirectResponse
     */

    public function store(StudentRequest $request)
    {
        DB::beginTransaction();

        try {
            $student = Student::create($request->all());
            $course = Course::find([1,2]);
            $student->courses()->attach($course);

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        return back()->with('success', "Successful");
    }

    public function list()
    {
        $students = Student::all();
        return view('dashboard.students.list', ['students' => $students]);
    }

    public function show($id)
    {
        $students = Student::findorfail($id);
        return view('dashboard.students.edit', ['students' => $students]);
    }

    public function update(StudentRequest $request, $id)
    {
        $validated = $request->validated();
        $info = Student::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/dashboard/students/list')->with('success', "Successful");
    }

    public function destroy($id)
    {
        $user = Student::findorfail($id);
        $user->delete();
        return back()->with('success', 'User has been deleted');
    }

}
