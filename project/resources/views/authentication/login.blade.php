<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('home.master')
@section('content')

<link href="css/style.css" rel="stylesheet">


<form action="{{route('login')}}" method="post">
    @csrf
    <h2>Login</h2>

    <p>
        <label for="email" class="floatLabel">Email</label>
        <input id="email" name="email" type="text">
        <span class="help-block">{{ ($errors->has('email')) ? $errors->first('email') : ''}}</span>

    </p>
    <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password" name="password" type="password">
        <span class="help-block">{{ ($errors->has('password')) ? $errors->first('password') : ''}}</span>

    </p>

    <p>
        <input href="/dashboard" type="submit" value="Log in" id="submit"><br>
        <a href="/register" class ="text-primary" id="signup">Sign Up</a>
    </p>
</form>


@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->