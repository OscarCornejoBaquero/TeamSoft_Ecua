<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index(){
      return view('ApiWeb/Login');
  }
  public function loginUser(){

      $credenciales = \request()->only('email','password');
      if (Auth::attempt($credenciales)){
          \request()->session()->regenerate();
          return view('ApiWeb/Dashboard');
      }
      return view('ApiWeb/Login');
  }
}
