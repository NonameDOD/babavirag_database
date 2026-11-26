<?php

namespace App\Http\Controllers;

use App\Models\Rendeles_tetelek;
use App\Http\Requests\StoreRendeles_tetelekRequest;
use App\Http\Requests\UpdateRendeles_tetelekRequest;
use Laravel\Mcp\Request;

class RendelesTetelekController extends Controller
{
    public function index() { return Rendeles_tetelek::all(); }

    public function show($id) { return Rendeles_tetelek::findOrFail($id); }

    public function store(Request $request)
    {
        return Rendeles_tetelek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Rendeles_tetelek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Rendeles_tetelek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
