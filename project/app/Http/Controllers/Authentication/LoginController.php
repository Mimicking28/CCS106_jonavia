<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Show()
    {
        return view('authentication.login');
    }

    public function Login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('home')->with('success' , "successful");
        }

        elseif(!Auth::attempt($credentials)){

            return redirect('/register')->with('fails' , "You are not registered");
        }

        return back()->withErrors('Login details are not valid');

    }

    protected function authenticated(Request $request, $user)
    {

        if($user->isAdmin()) {
            return ('you are not admin');
        }

        else if($user->isTeacher()) {
            return redirect(route('dashboard/teacher'));
        }

        else if($user->isStudent()) {
            return redirect(route('dashboard/student'));
        }

        abort(404);
    }
}

