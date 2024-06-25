<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergieen;

class AllergieController extends Controller
{
    public function overzicht_allergieen()
    {
        $allergieen = Allergieen::all();
        return view('allergieen', ['allergieen' => $allergieen]);
    }
}
