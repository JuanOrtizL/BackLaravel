<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        //return response()->json($user, 200);
        return UserResource::collection(User::all());
    }


    public function store(UserRequest $request):JsonResponse
    {
        $user = User::create($request->all());
        return response()->json([
            'success'=>true,
            'data'=>new UserResource($user)
        ], 201);
    }


    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user, 200);
    }


    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->nombre =$request->nombre;
        $user->user=$request->user;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->fecha_nacimiento=$request->fecha_nacimiento;
        $user->password=$request->password;
        $user->save();

        return response()->json([
            'success'=>true,
            'data'=>$user
        ], 200);
    }


    public function destroy(string $id)
    {
        User::find($id)->delete();
        return response()->json(['success'=>true], 200);
    }
}
