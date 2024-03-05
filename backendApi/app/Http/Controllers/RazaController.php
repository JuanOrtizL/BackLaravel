<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use Illuminate\Http\Request;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raza = Raza::all();
        return response()->json($raza, 200);
    }


    public function store(Request $request)
    {
        $raza = Raza::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>$raza
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $raza = Raza::find($id);
        return response()->json($raza, 200);
    }


    public function update(Request $request, string $id)
    {
        $raza = Raza::find($id);
        $raza->nombre = $request->nombre;
        $raza->save();

        return response()->json([
            'success'=>true,
            'data'=>$raza
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Raza::find($id)->delete();
        return response()->json(['success'=>true], 200);
    }
}
