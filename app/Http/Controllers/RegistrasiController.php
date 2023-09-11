<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\RegistrasiController;

class RegistrasiController extends Controller
{
    public function index(){
		return view('Registrasi');
	}
}
