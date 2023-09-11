<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\InboxController;

class InboxController extends Controller
{
    public function index(){
		return view('Inbox');
	}
}

