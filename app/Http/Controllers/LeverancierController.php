<?php

namespace App\Http\Controllers;

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
            'adres' => ['required', 'max:60'],
            'email' => ['required', 'email', 'max:30'],
            'contactpersoon' => ['required', 'max:250'],
            'telefoonnummer' => ['required', 'min:14' , 'max:40'],
        ]);

        // storing the validated data
        $leverancier = new Leverancier([
            'bedrijfsnaam' => $validatedData['bedrijfsnaam'],
            'adres' => $validatedData['adres'],
            'email' => $validatedData['email'],
            'contactpersoon' => $validatedData['contactpersoon'],
            'telefoonnummer' => $validatedData['telefoonnummer'],
        ]);

        dd($leverancier);

        // saving the data
        $leverancier->save();

       
    }
}
