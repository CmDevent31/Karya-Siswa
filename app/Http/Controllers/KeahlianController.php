<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\KeahlianController;

class KeahlianController extends Controller
{
    public function index(){
		return view('Keahlian');
	}
}
