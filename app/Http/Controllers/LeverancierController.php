<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function create()
    {
        return view('leverancier.create');
    }
}
