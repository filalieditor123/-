<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vak;
use Illuminate\Http\Request;

class VakController extends Controller
{
    public function index()
    {
        return Vak::with('docent')->orderBy('naam')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'nullable',
            'docent_id' => 'required|exists:docents,id',
        ]);

        return Vak::create($request->all());
    }

    public function show($id)
    {
        return Vak::with('docent')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $vak = Vak::findOrFail($id);
        $vak->update($request->all());
        return $vak;
    }

    public function destroy($id)
    {
        return Vak::destroy($id);
    }
}
