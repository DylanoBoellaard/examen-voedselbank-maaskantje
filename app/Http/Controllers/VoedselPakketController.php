<?php

namespace App\Http\Controllers;

use App\Models\VoedselPakket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoedselPakketController extends Controller
{
    // this function sends the user to the overzicht page with data
    public function overzicht_voedsel_pakket()
    {
        // tries to get the data from database
        try {
            // is the data from database
            $data = DB::table('voedselpakketten')->join('klanten', 'voedselpakketten.klant_id', 'klanten.id')->get();
            // catch the error and send the error and the user to the overzicht page
        } catch (\Throwable $e) {
            return redirect(route('overzicht'))->with('alert', 'Error cannot get the data.');
        }
        // otherwise sends the user to the overzicht page with data
        return view('voedselpakket.overzicht', compact('data'));
    }

    // sends the user to the create page
    public function create()
    {
        return view('voedselpakket.create');
    }

    // makes a new voedsel pakket
    public function store(Request $request)
    {
        // checks if the data send by the user has the requirements
        $validated = $request->validate([
            'datum_uitgifte' => 'required|date|date_format:Y-m-d',
            'datum_samenstelling' => 'required|date|date_format:Y-m-d',
            'klant_id' => 'required|integer|exists:klanten,id|unique:voedselpakketten,klant_id',
        ]);

        // creates the voedsel pakket with the data that the user put in the form
        VoedselPakket::create($validated);

        // sends the user to the overzicht page
        return redirect(route('overzicht'));
    }

    // send the user to the edit page with the data from the voedselpakket the user clicked on
    public function edit(VoedselPakket $pakketId)
    {
        // sends the user to the edit page with data
        return view('voedselpakket.edit', compact('pakketId'));
    }

    // edits the voedsel pakket data
    public function update(Request $request, VoedselPakket $pakketId)
    {
        // checks if the user input meet the requirements
        $validated = $request->validate([
            'datum_uitgifte' => 'required|date|date_format:Y-m-d',
            'datum_samenstelling' => 'required|date|date_format:Y-m-d',
            'klant_id' => 'required|integer|exists:klanten,id|unique:voedselpakketten,klant_id,' . $pakketId->id,
        ]);

        // if the input values meet the requirements then change that specific row of data
        DB::table('voedselpakketten')->where('voedselpakketten.id', $pakketId->id)->update($validated);

        // sends the user to the overzicht page
        return redirect(route('overzicht'));
    }

    // deletes the row of data from the one the user wanted to be deleted
    public function delete($pakketId)
    {
        // deletes the row of data
        DB::table('voedselpakketten')->where('id', $pakketId)->delete();

        // sends user back to the overzicht page
        return redirect(route('overzicht'));
    }
}
