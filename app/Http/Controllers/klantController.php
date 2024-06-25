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
                'klanten.id',
                'klanten.naam',
                'klanten.huisnummer',
                'klanten.postcode',
                'klanten.plaats',
                'klanten.straat',
                'klanten.voornaam',
                'klanten.tussenvoegsel',
                'klanten.achternaam',
                'klanten.email',
                'klanten.telefoon',
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
        //validate the incoming data
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
        //create a new gezinssamenstelling
        $gezinssamensteling = Gezinssamenstelling::create([
            'aantalvolwassenen' => $data['aantalvolwassenen'],
            'aantalkinderen' => $data['aantalkinderen'],
            'aantalbabies' => $data['aantalbabies']
        ]);
        //create a new klant
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

    public function wijzigen(Klanten $klant)
    {
        return view('klant/klantWijzigen', compact('klant'));
    }

    public function update(Klanten $klant, Request $request)
    {
        //validate the incoming data
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
        //update the klant
        $klant->update($data);
        //redirect to the overview page
        return redirect(route('klant.overzicht_klant'))->with('success', 'Klant is gewijzigd!');
    }

    public function verwijderen(Klanten $klant)
    {
        //delete the klant
        $klant->delete();
        //redirect to the overview page
        return redirect(route('klant.overzicht_klant'))->with('success', 'Klant is verwijderd!');
    }
}
