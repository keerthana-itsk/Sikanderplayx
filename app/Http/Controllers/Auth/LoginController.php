<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

public function login()
{
    return view('Auth.login');
}

public function postLogin(Request $request)
{

 $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);


    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard')
                    ->withSuccess('success','You have Successfully loggedin');
    }
    return redirect()->route("login")->withError('fail', 'Oops! You have entered invalid credentials');

}

public function dashboard()
{
    return view('dashboard');
}

public function logout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();

    return $this->loggedOut($request) ?: redirect('/');
}




}
