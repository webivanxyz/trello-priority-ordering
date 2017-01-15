<?php

namespace App\Http\Controllers;

use App\UserCardPriority;
use Illuminate\Http\Request;

class UserCardPriorityController extends Controller
{
    public function index()
    {
    	return UserCardPriority::all();
    }
}
