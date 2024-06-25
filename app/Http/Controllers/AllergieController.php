<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;

class AllergieController extends Controller
{
    public function overzicht_allergieen()
    {
        $allergie = Allergie::all('naam');
        return view('allergie', ['allergieen' => $allergie]);
    }
}
