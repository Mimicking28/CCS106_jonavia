<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('dashboard.dashboard')
@section('content')

    <h3>Courses</h3>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Course Name</th>
                <th scope="col">Unit</th>
                <th scope="col">Location</th>
                <th scope="col">Schedule</th>

            </tr>
            </thead>
            @foreach($course as $courses)
                <tbody>
                <tr>
                    <th scope="row">{{$courses -> id}}</th>
                    <td>{{$courses -> course_name }}</td>
                    <td>{{$courses -> unit}}</td>
                    <td>{{$courses -> location}}</td>
                    <td>{{$courses -> schedule}}</td>

                    <td>
                        <a href="edit/{{$courses -> id}}" style="background-color: #874CCC; color: white; border: none" class="btn btn-primary">Edit</a>
                        <a href="delete/{{$courses ->id}}" style="background-color: #C65BCF; color: white; border: none" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->