<?php

namespace App\Http\Controllers;

use App\Models\Tamano;
use Illuminate\Http\Request;

class TamanoController extends Controller
{


    public function index()
    {
        $size = Tamano::all();
        return response()->json($size, 200);
    }


    public function store(Request $request)
    {
        $size = Tamano::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>$size
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $size = Tamano::find($id);
        return response()->json($size, 200);
    }


    public function update(Request $request, string $id)
    {
        $size = Tamano::find($id);
        $size->nombre = $request->nombre;
        $size->talla = $request->talla;
        $size->save();

        return response()->json([
            'success'=>true,
            'data'=>$size
        ], 200);
    }


    public function destroy(string $id)
    {
        Tamano::find($id)->delete();
        return response()->json(['success'=>true], 200);
    }
}
