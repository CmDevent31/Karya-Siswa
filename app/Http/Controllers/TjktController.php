<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TjktController;

class TjktController extends Controller
{
    public function index(){
		return view('Tjkt');
	}
}
