<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\SettingProfileController;

class SettingProfileController extends Controller
{
    public function index(){
		return view('SettingProfile');
	}
}
