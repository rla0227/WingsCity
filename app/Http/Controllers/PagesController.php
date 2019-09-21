<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Wings City!'; 
        //return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title); 
    }

    public function menu()
    {
        $title = 'Menu'; //variable called title
        return view('pages/menu')->with('title', $title); //pass in variable
        //goes in views > pages > menu.blade.php
    }

    public function about()
    {
        return view('pages/about');
    }
}
