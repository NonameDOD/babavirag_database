<?php

namespace App\Http\Controllers;

use App\Models\Kedvencek;
use App\Http\Requests\StoreKedvencekRequest;
use App\Http\Requests\UpdateKedvencekRequest;
use Laravel\Mcp\Request;

class KedvencekController extends Controller
{
     public function index() { return Kedvencek::all(); }

    public function show($id) { return Kedvencek::findOrFail($id); }

    public function store(Request $request)
    {
        return Kedvencek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Kedvencek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Kedvencek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
