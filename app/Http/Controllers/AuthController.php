<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(RegisterRequest $request)
    {

    }


    public function logout(RegisterRequest $request)
    {

    }

    public function Register(RegisterRequest $request)
    {
        $data = $request->validated();
    }
}
