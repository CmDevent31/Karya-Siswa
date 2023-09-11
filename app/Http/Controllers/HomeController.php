<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
		return view('Home');
	}
}
