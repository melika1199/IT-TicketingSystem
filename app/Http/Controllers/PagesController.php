<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //get the view pages and present them to user

    public function about(){
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }
    
    public function confirm()
    {
        return view('confirm');
    }

    public function trackProgress()
    {
        return view('trackProgress');
    }

    public function home()
    {
        return view('home');
    }

}
