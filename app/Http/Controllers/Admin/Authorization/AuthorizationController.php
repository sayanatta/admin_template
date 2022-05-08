<?php

namespace App\Http\Controllers\Admin\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    public function login()
    {
        return view('admin.authorization.login');
    }

    public function login_check(LoginValidation $request)
    {
        if (Auth::attempt(array('email' => $request['email'], 'password' => $request['password'], 'user_type' => 1))) {
            return redirect()->route('dashboard');
        }
    }
}
