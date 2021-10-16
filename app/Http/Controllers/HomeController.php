<?php

namespace App\Http\Controllers;


use App\Link;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $links=Link::all();
        return view('home',['links' => $links]);
    }
    


    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}
