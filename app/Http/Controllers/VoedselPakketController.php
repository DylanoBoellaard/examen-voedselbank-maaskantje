<?php

namespace App\Http\Controllers;

use App\Models\VoedselPakket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoedselPakketController extends Controller
{
    public function overzicht_voedsel_pakket()
    {
        try {
            $data = DB::table('voedselpakketten')->join('klanten', 'voedselpakketten.klant_id', 'klanten.id')->get();
        } catch (\Throwable $e) {
            return redirect(route('overzicht'))->with('alert', 'Error cannot get the data.');
        }
        return view('voedselpakket.overzicht', compact('data'));
    }

    public function create()
    {
        return view('voedselpakket.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'datum_uitgifte' => 'required|date|date_format:Y-m-d',
            'datum_samenstelling' => 'required|date|date_format:Y-m-d',
            'klant_id' => 'required|integer|exists:klanten,id|unique:voedselpakketten,klant_id',
        ]);

        VoedselPakket::create($validated);

        return redirect(route('overzicht'));
    }

    public function edit(VoedselPakket $pakketId)
    {
        return view('voedselpakket.edit', compact('pakketId'));
    }

    public function update(Request $request, VoedselPakket $pakketId)
    {
        $validated = $request->validate([
            'datum_uitgifte' => 'required|date|date_format:Y-m-d',
            'datum_samenstelling' => 'required|date|date_format:Y-m-d',
            'klant_id' => 'required|integer|exists:klanten,id|unique:voedselpakketten,klant_id,' . $pakketId->id,
        ]);

        DB::table('voedselpakketten')->where('voedselpakketten.id', $pakketId->id)->update($validated);

        return redirect(route('overzicht'));
    }
}
