<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdministradorResource;
use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Administrador::all();
        return AdministradorResource::collection(Administrador::all());
    }


    public function store(Request $request)
    {
        $admin = Administrador::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>new AdministradorResource($admin)
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Administrador::find($id);
        return response()->json($admin, 200);
    }


    public function update(Request $request, string $id)
    {
        $admin = Administrador::find($id);
        $admin->nombre =$request->nombre;
        $admin->user=$request->user;
        $admin->password=$request->password;
        $admin->save();

        return response()->json([
            'success'=>true,
            'data'=>$admin
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Administrador::find($id)->delete();
        return response()->json(['success'=>true],200);
    }
}
