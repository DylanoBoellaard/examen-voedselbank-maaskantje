<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;

class AllergieController extends Controller
{
    public function wijzig($id)
    {

        $allergie = Allergie::find($id);

        return view('allergie.allergie_wijzig', compact('allergie'));
    }
    public function update()
    {
        $allergie = Allergie::find(request('id'));
        $allergie->naam = request('naam');
        $allergie->save();

        return redirect('allergie/allergien_list');
    }

    public function toevoegen()
    {
        return view('allergie.allergie_toevoegen');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naam' => 'required|string|max:255', // Validation rules
        ]);

        $allergie = new Allergie(); // Assuming you have an Allergie model
        $allergie->naam = $validatedData['naam'];
        $allergie->save(); // Save the new allergie

        return redirect('allergie/allergien_list'); // Redirect after saving
    }
    public function verwijder($id)
    {
        $allergie = Allergie::findOrFail($id); // Find the allergie by ID
        $allergie->delete(); // Delete the allergie

        return redirect()->route('allergieen.list')->with('success', 'Allergie successfully deleted.');
    }
}
