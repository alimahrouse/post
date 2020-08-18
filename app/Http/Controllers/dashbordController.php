<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class dashbordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $p=post::get()->where('user_id',auth()->user()->id);
         $count=post::where('user_id',auth()->user()->id)->get()->count();
       // $count=$p::count();
       // dd($count);
        
        return view('posts.dashbord',compact('p','count'));
    }
}
