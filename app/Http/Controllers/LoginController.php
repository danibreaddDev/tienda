<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function loginForm()
    {
        return view("auth.login");
    }
    public function login(Request $request)
    {
        $credentials = $request->only("username", "password");
        if (!Auth::attempt($credentials)) {
            $error = "Incorrect User. Try it now.";
            return view("auth.login", compact("error"));
        }
        return redirect()->intended(route('Products.index'));
    }
    public function logout() {
        Auth::logout();
        return redirect("login");
    }
}
