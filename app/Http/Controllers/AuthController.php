<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        return view('auth/login');
    }

    public function login(){
        return view('auth/login');
    }
}
