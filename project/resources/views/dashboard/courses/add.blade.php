<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('dashboard.dashboard')
@section('content')

    <form action="{{route('course')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Courses</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('course_name')) ? $errors->first('course_name') : ''}}</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" id="location" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('location')) ? $errors->first('location') : ''}}</span>
                </div>
            </div><div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Schedule</label>
                    <input type="text" name="schedule" id="schedule" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('schedule')) ? $errors->first('schedule') : ''}}</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Unit</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('unit')) ? $errors->first('unit') : ''}}</span>
                </div>
            </div>

            <div class="col-12">
                <input href= "/dashboard" value="Add Course" type="submit" id="submit" style="background-color: #874CCC; color: white; border: none" class="btn btn-primary">
            </div>
            
        </div>
    </form>
@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->


