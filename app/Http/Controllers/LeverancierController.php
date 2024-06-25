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
            'telefoonnummer' => ['required', 'min:14', 'max:40'],
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

        // an if statement to check if the data is saved
        if ($leverancier->save()) {
            // redirecting to the read page with a status message
            return redirect('leverancier/show')->with('status', 'Leverancier is toegevoegd!');
        } else {
            // redirecting to the read page with a status message
            return redirect('leverancier/create')->with('status', 'Het is niet gelukt om leverancier toe te voegen');
        }
    }

    public function show()
    {
        // getting all the data from the database
        $leveranciers = Leverancier::all();

        // returning the view with the data
        return view('leverancier.read', ['leveranciers' => $leveranciers]);
    }

    public function edit($id)
    {
        // getting the data from the database
        $leverancier = Leverancier::find($id);

        // returning the view with the data
        return view('leverancier.edit', ['leverancier' => $leverancier]);
    }

    public function update(Request $request, $id)
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
            'telefoonnummer' => ['required', 'min:14', 'max:40'],
        ]);

        $leverancier = Leverancier::find($id);

        // updating the validated data
        $leverancier->update([
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


        // an if statement to check if the data is saved
        if ($leverancier->update()) {
            // redirecting to the read page with a status message
            return redirect('leverancier/show')->with('status', 'Leverancier is gewijzigd!');
        } else {
            // redirecting to the read page with a status message
            return redirect('leverancier/create')->with('status', 'Het is niet gelukt om leverancier te wijzigen');
        }
    }

    public function destroy($id)
    {
        // getting the data from the database
        $leverancier = Leverancier::find($id);

        // deleting the data
        $leverancier->delete();

        if ($leverancier->delete()) {
            // redirecting to the read page with a status message
            return redirect('leverancier/show')->with('status', 'Leverancier is verwijderd!');
        } else {
            // redirecting to the read page with a status message
            return redirect('leverancier/show')->with('status', 'leverancier is niet verwijderd');
        }
    }
}
