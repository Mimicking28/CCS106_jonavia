<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function Logout(Request $request)
    {
        Session::flush();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Auth::logout();

        return redirect('/home');
    }
}
