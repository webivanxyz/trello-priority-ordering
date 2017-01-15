<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardUserRules;

class BoardUserRuleController extends Controller
{
	public function index()
	{
		return BoardUserRules::all();
	}
    //
}
