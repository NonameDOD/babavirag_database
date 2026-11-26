<?php

namespace App\Http\Controllers;

use App\Models\Kosar;
use App\Http\Requests\StoreKosarRequest;
use App\Http\Requests\UpdateKosarRequest;
use Laravel\Mcp\Request;

class KosarController extends Controller
{
    public function index() { return Kosar::all(); }

    public function show($id) { return Kosar::findOrFail($id); }

    public function store(Request $request)
    {
        return Kosar::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Kosar::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Kosar::destroy($id);
        return response()->json(['message' => 'Sikeres törlés']);
    }
}
