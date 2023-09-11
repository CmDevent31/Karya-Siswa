<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\TermsConditionController;

class TermsConditionController extends Controller
{
    public function index(){
		return view('TermsCondition');
	}
}
