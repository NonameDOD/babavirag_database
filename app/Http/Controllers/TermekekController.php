<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use App\Http\Requests\StoreTermekekRequest;
use App\Http\Requests\UpdateTermekekRequest;
use Laravel\Mcp\Request;

class TermekekController extends Controller
{
    public function index() { return Termekek::all(); }

    public function show($id) { return Termekek::findOrFail($id); }

    public function store(Request $request)
    {
        return Termekek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Termekek::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Termekek::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
