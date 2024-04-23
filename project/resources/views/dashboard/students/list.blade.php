<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('dashboard.dashboard')
@section('content')

            <h3>Students</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Gender</th>


                    </tr>
                    </thead>
                    @foreach($students as $student)
                    <tbody>
                    <tr>
                        <th scope="row">{{$student -> id}}</th>
                        <td>{{$student -> first_name }}</td>
                        <td>{{$student -> last_name }}</td>
                        <td>{{$student -> gender }}</td>

                        <td>
                            <a href="edit/{{$student -> id}}" style="background-color: #874CCC; color: white; border: none" class="btn btn-primary">Edit</a>
                            <a href="delete/{{$student->id}}" style="background-color: #C65BCF; color: white; border: none"  class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->