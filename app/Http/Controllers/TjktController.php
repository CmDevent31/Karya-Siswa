<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\TjktController;

class TjktController extends Controller
{
    public function index(){
		return view('Tjkt');
	}
}
