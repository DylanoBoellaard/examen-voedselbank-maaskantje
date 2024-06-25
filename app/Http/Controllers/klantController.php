<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class klantController extends Controller
{
    //
    public function index()
    {
        $klanten = DB::table('klanten')
            ->select(
                'klanten.*',
                'gezinssamenstelling.aantalvolwassenen',
                'gezinssamenstelling.aantalkinderen',
                'gezinssamenstelling.aantalbabies'
            )
            ->join(
                'gezinssamenstelling',
                'klanten.gezinssamenstelling_id',
                '=',
                'gezinssamenstelling.id'
            )
            ->get();

        return view('klant/klantOverzicht', ['klanten' => $klanten]);
    }
}
