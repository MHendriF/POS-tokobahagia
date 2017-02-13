<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Sentinel;


class VisitorsController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	return view('home', compact('user'));
    }
}
