<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $pet = Mascota::all();
        return response()->json($pet, 200);
    }


    public function store(Request $request)
    {
        $pet = Mascota::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>$pet
        ], 201);
    }


    public function show(string $id)
    {
        $pet = Mascota::find($id);
        return response()->json($pet, 200);
    }


    public function update(Request $request, string $id)
    {
        $pet = Mascota::find($id);
        $pet->nombre = $request->nombre;
        $pet->edad = $request->edad;
        $pet->historial = $request->historial;
        $pet->imagen = $request->imagen;
        $pet->user_id = $request->user_id;
        $pet->tipo_id = $request->tipo_id;
        $pet->actividad_id = $request->actividad_id;
        $pet->raza_id = $request->raza_id;
        $pet->tamano_id = $request->tamano_id;

        $pet->save();

        return response()->json([
            'success'=>true,
            'data'=>$pet
        ], 200);
    }


    public function destroy(string $id)
    {
        Mascota::find($id)->delete();
        return response()->json(['success'=>true], 200);
    }
}
