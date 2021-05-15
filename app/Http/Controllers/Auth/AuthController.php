<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.sign-in');
    }

    public function signUp()
    {
        return view('pages.auth.sign-up');
    }
}
