<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\InputKaryaController;

class InputKaryaController extends Controller
{
    public function index(){
		return view('InputKarya');
	}
}
