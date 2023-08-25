<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnimasiController;

class AnimasiController extends Controller
{
    public function index(){
		return view('Animasi');
	}
}
