<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\AnimasiController;

class AnimasiController extends Controller
{
    public function index(){
		return view('Animasi');
	}
}
