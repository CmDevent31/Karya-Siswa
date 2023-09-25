<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\ArticleController;

class ArticleController extends Controller
{
    public function index(){
		return view('Article');
	}
}
