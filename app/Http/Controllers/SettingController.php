<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\SettingController;

class SettingController extends Controller
{
    public function index(){
		return view('Setting');
	}
}
