<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use GuzzleHttp\Client; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('BackLogout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $subscribe = false;
        if($user->mailist == 1)

          $subscribe =true;
    
    
        return view('home', ['subscribe'=>$subscribe]);
    }

    public function send(Request $request)
    {
        $client = new Client();
        
        if ($request->mailist == null ) {
           return "uncheck";
        }
        else{
            return "check";
        }
    }

}
