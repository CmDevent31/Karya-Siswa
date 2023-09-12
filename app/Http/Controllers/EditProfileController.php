<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\EditProfileController;

class EditProfileController extends Controller
{
    public function index(){
		return view('EditProfile');
	}
}
