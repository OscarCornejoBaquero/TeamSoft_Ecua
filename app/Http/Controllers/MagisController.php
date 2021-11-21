<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagisController extends Controller
{
    public function index(){
        return view('WebSite/Magis');
    }
}
