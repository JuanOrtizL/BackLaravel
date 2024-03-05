<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $act = Actividad::all();
        return response()->json($act, 200);
    }


    public function store(Request $request)
    {
        $act = Actividad::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>$act
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $act = Actividad::find($id);
        return response()->json($act, 200);
    }


    public function update(Request $request, string $id)
    {
        $act = Actividad::find($id);
        $act->nombre = $request->nombre;
        $act->save();

        return response()->json([
            'success'=>true,
            'data'=>$act
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Actividad::find($id)->delete();
        return response()->json(['success'=>true], 200);
    }
}
