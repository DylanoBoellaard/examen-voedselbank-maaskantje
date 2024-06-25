<?php

namespace App\Http\Controllers;

use App\Models\VoedselPakket;
use Illuminate\Http\Request;

class VoedselPakketController extends Controller
{
    public function overzicht_voedsel_pakket()
    {
        $data = VoedselPakket::join('klanten', 'voedselpakketten.klant_id', 'klanten.id')->get();
        return view('voedselpakket.overzicht', compact('data'));
    }
}
