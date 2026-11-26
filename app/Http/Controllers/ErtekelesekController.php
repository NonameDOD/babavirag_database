<?php

namespace App\Http\Controllers;

use App\Models\Ertekelesek;
use App\Http\Requests\StoreErtekelesekRequest;
use App\Http\Requests\UpdateErtekelesekRequest;
use Laravel\Mcp\Request;

class ErtekelesekController extends Controller
{
    public function index()
    {
        return Ertekelesek::all();
    }

    public function show($id)
    {
        return Ertekelesek::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Ertekelesek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Ertekelesek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Ertekelesek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
