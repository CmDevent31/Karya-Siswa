<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\EditPasswordController;

class EditPasswordController extends Controller
{
    public function index(){
		return view('EditPassword');
	}
}