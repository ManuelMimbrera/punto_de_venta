<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function registrar(Request $request){
        if($request->id == 0){
            $usuario = new User();
        }else{
            $usuario = User::find($request->id);
        }

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->rol = "Cliente";

        $usuario->save();

        return response()->json($usuario,200);
    }

    public function sesion(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();

            $response = [
            'displayName' => $user->name,
            'userId' => $user->id,
            'token' => $user->createToken('MyApp')->accessToken,
            'message' => "Acceso concedido",
        ];
            
            return response()->json($response, 200);
        }
        else{

            $response = [
                'displayName' => '',
                'userId' => 0,
                'token' => '',
                'message' => "Usuario no encontrado",
            ];
                
                return response()->json($response, 200);
        }
    }

    }
