<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
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
    public function Show()
    {
        return view('authentication.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RegisterRequest $request
     * @return Application|RedirectResponse|Redirector
     */


    public function Register(RegisterRequest $request)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($validated , $request){
            User::create($validated);
        });

            $request->session()->regenerate();
            $request->session()->flash('notification', 'Thank you for subscribing!');
            return redirect('/home')->with('success', "Register Successful. Please Login");


    }

}
