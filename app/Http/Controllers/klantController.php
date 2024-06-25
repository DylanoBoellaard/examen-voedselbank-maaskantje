<?php

namespace App\Http\Controllers;

use App\Models\Gezinssamenstelling;
use App\Models\Klanten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class klantController extends Controller
{
    //
    public function overzicht_klant()
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

    public function toevoegen()
    {
        return view('klant/klantToevoegen');
    }

    public function store(Request $request)
    {
        //validate the data
        $data = $request->validate([
            'naam' => 'required',
            'aantalvolwassenen' => 'required',
            'aantalkinderen' => 'required',
            'aantalbabies' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required',
            'plaats' => 'required',
            'straat' => 'required',
            'voornaam' => 'required',
            'tussenvoegsel' => 'string|nullable',
            'achternaam' => 'required',
            'email' => 'required',
            'telefoon' => 'required',
        ]);
        $gezinssamensteling = Gezinssamenstelling::create([
            'aantalvolwassenen' => $data['aantalvolwassenen'],
            'aantalkinderen' => $data['aantalkinderen'],
            'aantalbabies' => $data['aantalbabies']
        ]);
        $klanttest = Klanten::create([
            'naam' => $data['naam'],
            'gezinssamenstelling_id' => $gezinssamensteling->id,
            'huisnummer' => $data['huisnummer'],
            'postcode' => $data['postcode'],
            'plaats' => $data['plaats'],
            'straat' => $data['straat'],
            'voornaam' => $data['voornaam'],
            'tussenvoegsel' => $data['tussenvoegsel'],
            'achternaam' => $data['achternaam'],
            'email' => $data['email'],
            'telefoon' => $data['telefoon']
        ]);

        //redirect to the overview page
        return redirect(route('klant.overzicht_klant'))->with('success', 'Klant is toegevoegd!');
    }
}
