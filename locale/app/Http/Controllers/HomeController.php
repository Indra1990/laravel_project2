<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use GuzzleHttp\Client; 

class HomeController extends Controller
{
    private $api_key = 'key-101ad550faac443a8f94137867b344b8';

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
        $user   = Auth::user();
        $subscribe = $user->mailist; 
        
        //subscribe
        if($request->mailist == 'subscribe' && $subscribe !=1) {

            $user->mailist = 1;
            $user->save();

            $res = $client->get('https://api.mailgun.net/v3/lists/ ', [
                    'auth' => [
                        'api' , $this->api_key
                    ]
                ]);
            //$res->setDefaultOption('verify', false);

            $res->getBody()->getContents();
        }
        // unsubscribe
        if($request->mailist != 'subscribe' && $subscribe == 1){

        }
    }

}
