<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('home.master')
@section('content')

<style>
    form {
        background: #fff;
        padding: 4em 4em 2em;
        max-width: 400px;
        margin: 50px auto 0;
        box-shadow: 0 0 1em #a0aec0;
        border-radius: 2px;
    }
    input {
        display: block;
        box-sizing: border-box;
        width: 100%;
        outline: none;
        margin: 0;
        border: 1px solid #dbdbdb;
        border-radius: 3px;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        background: #fff
    }

    input[type="submit"] {
        background: #282d32;
        color:floralwhite;
        padding: 15px;
        border-radius: 3px;
    }
    .help-block {
        color: red;
        font-size: 12px;
    }


</style>

<form action="{{ route('register') }}" method="post">
    @csrf

    <h2>Sign Up</h2>

    <p>
        <label for="name" class="floatLabel">Name</label>
        <input id="name" name="name" type="text">
        <span class="help-block">{{ ($errors->has('name')) ? $errors->first('name') : ''}}</span>

    </p>

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
        <label for="confirm_password" class="floatLabel">Confirm Password</label>
        <input id="confirm_password" name="confirm_password" type="password">
        <span class="help-block">{{ ($errors->has('confirm_password')) ? $errors->first('confirm_password') : ''}}</span>

    </p>

    <p>
        <label>Role</label>

        <select name="is_admin" class="floatLabel"> 
             <option>Admin</option>
        </select>
        <span class="help-block">{{ ($errors->has('is_admin')) ? $errors->first('is_admin') : ''}}</span>
    </p>

    <br>
    <p>
        <input href = "/login"type="submit" value="Create Account" id="submit">
    </p>


    @if (session()->has('notification'))
        <div class="notification">
            {!! session('notification') !!}
        </div>
    @endif

</form>


@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->