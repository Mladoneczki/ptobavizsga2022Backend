<?php

namespace App\Http\Controllers;

use App\Models\szakdoga;
use Illuminate\Http\Request;

class szakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return szakdoga::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new szakdoga();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return szakdoga::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = szakdoga::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        szakdoga::find($id)->delete();
    }
}
