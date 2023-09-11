<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\PembelajaranController;

class PembelajaranController extends Controller
{
    public function index(){
		return view('Pembelajaran');
	}
}
