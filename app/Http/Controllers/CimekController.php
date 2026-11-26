<?php

namespace App\Http\Controllers;

use App\Models\Cimek;
use App\Http\Requests\StoreCimekRequest;
use App\Http\Requests\UpdateCimekRequest;
use Laravel\Mcp\Request;

class CimekController extends Controller
{
    public function index() { return Cimek::all(); }

    public function show($id) { return Cimek::findOrFail($id); }

    public function store(Request $request)
    {
        return Cimek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Cimek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Cimek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
