<?php

namespace App\Http\Controllers;

use App\Models\Rendelesek;
use App\Http\Requests\StoreRendelesekRequest;
use App\Http\Requests\UpdateRendelesekRequest;
use Laravel\Mcp\Request;

class RendelesekController extends Controller
{
    public function index() { return Rendelesek::with('tetelek')->get(); }

    public function show($id) { return Rendelesek::with('tetelek')->findOrFail($id); }

    public function store(Request $request)
    {
        return Rendelesek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Rendelesek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Rendelesek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
