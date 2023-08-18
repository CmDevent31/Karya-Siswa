<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestimoniController;

class TestimoniController extends Controller
{
    public function index(){
		return view('Testimoni');
	}
}
