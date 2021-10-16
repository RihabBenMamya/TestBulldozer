<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Carbon\Carbon;
use App\Helpers\LogActivity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
        $this->middleware('checkUserUrlNumber', ['only' => ['create','store']]);
    }
    public function index()
    {
        $user = User::find(Auth::id());
        $links = $user->links()->get();
        return view('links.index', ['links' => $links]);
    }
    public function create()
    {
       
        return view('links.create');
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'url' => 'required'
        ]);
        if (Link::count() >= 20){Link::orderBy('id', 'asc')->limit(1)->delete();}
        
       
            $link = new Link;
        $link->url = $request->url;
        $link->save();

        $link->user()->attach(Auth::id());
        $link->save();
       
        return redirect('/links');
        
        
    }
    public function show(Link $link)
    {
        LogActivity::addToLog('');
        $link = Link::find($link)->first();
       
        return redirect($link->url, 301);
    }
    public function destroy(Link $link)
    {
        $link->user()->detach();
        $link->delete();
        
        return redirect('/links');
    }
}
