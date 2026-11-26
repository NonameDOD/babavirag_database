<?php

namespace App\Http\Controllers;

use App\Models\Fizetesek;
use App\Http\Requests\StoreFizetesekRequest;
use App\Http\Requests\UpdateFizetesekRequest;
use Laravel\Mcp\Request;

class FizetesekController extends Controller
{
    public function index() { return Fizetesek::all(); }

    public function show($id) { return Fizetesek::findOrFail($id); }

    public function store(Request $request)
    {
        return Fizetesek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Fizetesek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Fizetesek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
