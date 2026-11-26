<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalok;
use App\Http\Requests\StoreFelhasznalokRequest;
use App\Http\Requests\UpdateFelhasznalokRequest;
use Illuminate\Support\Facades\Hash;
use Laravel\Mcp\Request;

class FelhasznalokController extends Controller
{
    public function index()
    {
        return response()->json(Felhasznalok::all());
    }

    public function show($id)
    {
        return response()->json(Felhasznalok::findOrFail($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:felhasznalok,email',
            'jelszo_hash' => 'required|string',
            'keresztnev' => 'required|string',
            'vezeteknev' => 'required|string',
        ]);

        $data['jelszo_hash'] = Hash::make($data['jelszo_hash']);

        return response()->json(Felhasznalok::create($data), 201);
    }

    public function update(Request $request, $id)
    {
        $felhasznalo = Felhasznalok::findOrFail($id);
        $felhasznalo->update($request->all());

        return response()->json($felhasznalo);
    }

    public function destroy($id)
    {
        Felhasznalok::destroy($id);

        return response()->json(['message' => 'Sikeres törlés']);
    }
}
