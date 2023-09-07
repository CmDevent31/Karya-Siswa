<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MyProfileController;

class MyProfileController extends Controller
{
    public function index(){
		return view('MyProfile');
	}
}
