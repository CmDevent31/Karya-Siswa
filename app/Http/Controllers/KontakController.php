<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KontakController;

class KontakController extends Controller
{
    public function index(){
		return view('Kontak');
	}
}
