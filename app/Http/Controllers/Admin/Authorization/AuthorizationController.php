<?php

namespace App\Http\Controllers\Admin\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginValidation;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function login()
    {
        return view('admin.authorization.login');
    }

    public function login_check(LoginValidation $request)
    {

    }
}
