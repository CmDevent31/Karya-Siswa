<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
    public function index(){
		return view('Login');
	}
}
