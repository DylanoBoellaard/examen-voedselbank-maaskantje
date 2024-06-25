<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoedselPakketController extends Controller
{
    public function overzicht_voedsel_pakket()
    {
        return view('voedselpakket.overzicht');
    }
}
