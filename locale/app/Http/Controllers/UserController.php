<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('BackLogout');
    }
    
    public function index()
	{
		return view('admin/index');
	}
}
