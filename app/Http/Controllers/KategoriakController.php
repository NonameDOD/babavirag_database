<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use App\Http\Requests\StoreKategoriakRequest;
use App\Http\Requests\UpdateKategoriakRequest;
use Laravel\Mcp\Request;

class KategoriakController extends Controller
{
    public function index() { return Kategoriak::all(); }

    public function show($id) { return Kategoriak::findOrFail($id); }

    public function store(Request $request)
    {
        return Kategoriak::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Kategoriak::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Kategoriak::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
