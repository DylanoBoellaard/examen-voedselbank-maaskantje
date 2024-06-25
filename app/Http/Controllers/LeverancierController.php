<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Leverancier;

class LeverancierController extends Controller
{
    public function create()
    {
        // returning the view
        return view('leverancier.create');
    }

    public function store(Request $request)
    {       
   
        // validating the request
        $validatedData = $request->validate([
            'bedrijfsnaam' => ['required', 'max:100'],
            'huisnummer' => ['required', 'max:10'],
            'postcode' => ['required', 'max:6'],
            'straat' => ['required', 'max:50'],
            'plaats' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:30'],
            'voornaam' => ['required', 'max:100'],
            'tussenvoegsel' => ['max:50'],
            'achternaam' => ['required', 'max:100'],
            'telefoonnummer' => ['required', 'min:14' , 'max:40'],
        ]);

        // storing the validated data
        $leverancier = new Leverancier([
            'bedrijfsnaam' => $validatedData['bedrijfsnaam'],
            'huisnummer' => $validatedData['huisnummer'],
            'postcode' => $validatedData['postcode'],
            'straat' => $validatedData['straat'],
            'plaats' => $validatedData['plaats'],
            'email' => $validatedData['email'],
            'voornaam' => $validatedData['voornaam'],
            'tussenvoegsel' => $validatedData['tussenvoegsel'] ?? ' ',
            'achternaam' => $validatedData['achternaam'],
            'telefoon' => $validatedData['telefoonnummer'],
        ]);

        // saving the data
        $leverancier->save();

        // redirecting to the homepage
        return redirect('/leverancier/create')->with('status', 'Leverancier is toegevoegd!');
    }
}
