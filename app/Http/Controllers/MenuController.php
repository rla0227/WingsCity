<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function flavors()
    {
        return view('menu/flavors');
    }

    public function appetizer()
    {
        return view('menu/appetizer');
    }

    public function salads()
    {
        return view('menu/salads');
    }

    public function specialties()
    {
        return view('menu/specialties');
    }

    public function wings()
    {
        return view('menu/wings');
    }

    public function wingsPack()
    {
        return view('menu/wingsPack');
    }

    public function combo()
    {
        return view('menu/combo');
    }

    public function sides()
    {
        return view('menu/sides');
    }

    public function dips()
    {
        return view('menu/dips');
    }

    public function kids()
    {
        return view('menu/kids');
    }

    public function specialtyDrinks()
    {
        return view('menu/specialtyDrinks');
    }

    public function beverages()
    {
        return view('menu/beverages');
    }

    public function beer()
    {
        return view('menu/beer');
    }
}
