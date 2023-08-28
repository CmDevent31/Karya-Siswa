<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KeahlianController;

class KeahlianController extends Controller
{
    public function index(){
		return view('Keahlian');
	}
}
