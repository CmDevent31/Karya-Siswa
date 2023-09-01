<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NormatifController;

class NormatifController extends Controller
{
    public function index(){
		return view('Normatif');
	}
}
