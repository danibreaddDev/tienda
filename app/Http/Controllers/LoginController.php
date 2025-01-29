<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        //si el usuario esta autenticado generamos el token
        $user = User::where("username", $request->username)->first();
        $user->api_token = Str::random(60);
        $user->save();
        return redirect()->intended(route('ProductList'));
    }
    public function logout() {
        Auth::logout();
        return redirect("login");
    }
}
