<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Docent;
use Illuminate\Http\Request;

class DocentController extends Controller
{
    public function index()
    {
        return Docent::with('vakken')->orderBy('naam')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'hobby' => 'nullable',
        ]);

        return Docent::create($request->all());
    }

    public function show($id)
    {
        return Docent::with('vakken')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $docent = Docent::findOrFail($id);
        $docent->update($request->all());
        return $docent;
    }

    public function destroy($id)
    {
        return Docent::destroy($id);
    }
}
