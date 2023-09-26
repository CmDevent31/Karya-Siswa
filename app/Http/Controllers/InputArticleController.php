<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\InputArticleController;

class InputArticleController extends Controller
{
    public function index(){
		return view('InputArticle');
	}
}
