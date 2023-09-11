<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\QuotesController;

class QuotesController extends Controller
{
    public function index(){
		return view('Quotes');
	}
}
