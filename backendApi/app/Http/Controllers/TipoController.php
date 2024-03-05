<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = Tipo::all();
        return response()->json($tipo, 200);
    }


    public function store(Request $request)
    {
        $tipo = Tipo::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>$tipo
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo = Tipo::find($id);
        return response()->json($tipo, 200);
    }


    public function update(Request $request, string $id)
    {
        $tipo = Tipo::find($id);
        $tipo->nombre = $request->nombre;
        $tipo->save();

        return response()->json([
            'success'=>true,
            'data'=>$tipo
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tipo::find($id)->delete();
        return response()->json(['success'=>true], 200);
    }
}
