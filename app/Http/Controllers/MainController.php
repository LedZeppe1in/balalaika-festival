<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function participants()
    {
        return view('participants');
    }

    public function alexanderNikolaychuk()
    {
        return view('alexander-nikolaychuk');
    }

    public function alexeyVrodlivets()
    {
        return view('alexey-vrodlivets');
    }

    public function andreyGorbachev()
    {
        return view('andrey-gorbachev');
    }

    public function olegPiskunov()
    {
        return view('oleg-piskunov');
    }

    public function arthurDavletshin()
    {
        return view('arthur-davletshin');
    }

    public function nikitaGovorov()
    {
        return view('nikita-govorov');
    }

    public function dmitryDmitrienko()
    {
        return view('dmitry-dmitrienko');
    }

    public function posters()
    {
        return view('posters');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
