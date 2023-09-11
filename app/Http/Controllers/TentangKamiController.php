<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\TentangKamiController;

class TentangKamiController extends Controller
{
    public function index(){
		return view('TentangKami');
	}
}