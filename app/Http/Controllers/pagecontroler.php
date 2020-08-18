<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pagecontroler extends Controller
{
    //
    public function abouta()
    {
        $data=['title'=>'ali','content'=>'wellcome to about page'];
           return view('pages.abouta')->with($data);
    }
    public function home()
    {
        $data=['title'=>'home','content'=>'wellcome to home page'];
        return view('pages.home')->with($data);
    }
    
    public function resource()
    {
        $data=['title'=>'resources','content'=>'wellcome to resources page'];
        return view('pages.resource')->with($data);
    }
    public function root()
    {
        $data=['title'=>'index','content'=>'wellcome to index page'];
        return view('welcome')->with($data);
    }
}
