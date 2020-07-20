<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('templates.auth.login');
    }

    public function loginAuthorize(LoginRequest $request)
    {
        if( !Auth::attempt($request->only(['login', 'password']), $request->has('remember')) ){
            return redirect()->back()->with('danger', 'Incorrect Login or Password!');
        }

        return redirect()->route('home')->with('info', 'You have successfully Login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('register.show');
    }
}
