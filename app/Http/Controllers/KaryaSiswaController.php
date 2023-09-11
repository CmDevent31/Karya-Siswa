<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\KaryaSiswaController;

class KaryaSiswaController extends Controller
{
    public function index(){
		return view('KaryaSiswa');
	}
}
