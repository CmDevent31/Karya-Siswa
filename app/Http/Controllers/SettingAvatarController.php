<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\SettingAvatarController;

class SettingAvatarController extends Controller
{
    public function index(){
		return view('SettingAvatar');
	}
}
