@extends('dashboard.dashboard')
@section('content')
    
    <h2>Add Teacher</h2>
    <hr>

    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Teacher Information</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{$info->first_name}}">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('first_name')) ? $errors->first('first_name') : ''}}</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{$info->last_name}}">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('last_name')) ? $errors->first('last_name') : ''}}</span>
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control select">
                        <option>{{$info->gender}}</option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Others</option>
                    </select>
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('gender')) ? $errors->first('gender') : ''}}</span>
                </div>
            </div>
            <div class="col-12">
                <input href="/dashboard/teachers/list" value="Add Teacher" type="submit" id="submit" style="background-color: #874CCC; color: white; border: none" class="btn btn-dark">
            </div>
        </div>
    </form>

@endsection

