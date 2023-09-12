<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\TimKamiController;

class TimKamiController extends Controller
{
    public function index(){
		return view('TimKami');
	}
}
