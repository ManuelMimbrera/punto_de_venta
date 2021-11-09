<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function listar_usuarios(Request $request){

        return Usuarios::where('name','like',$request->palabrados)->get();
        
       // $cliente = Cliente::all();

        //return $cliente;
    }

    public function guardar_usuario(Request $request)
    {
        if($request->id == 0){
            $usuarios= new Usuarios();
        }else{
            $usuarios= Usuarios::find($request->id);
        }
        $usuarios->name = $request->name;
        $usuarios->save();

        return response()->json($usuarios, 200);
    }
}
