<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\PageNotFoundController;

class PageNotFoundController extends Controller
{
    public function index(){
		return view('PageNotFound');
	}
}
