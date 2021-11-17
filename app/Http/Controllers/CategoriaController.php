<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar_menu(){

        return Categoria::where('estado','=','Activo')
        ->get();
        
    }

    public function listar_categorias(Request $request){

        return Categoria::where('nomcate','like',$request->nombre)->get();
        
        //$categorias = Categoria::all();

        //return $categorias;
    }

    public function guardar_categorias(Request $request){
        
        if($request->id == 0){
            $categoria = new Categoria();
        }else{
            $categoria = Categoria::find($request->id);
        }
        

        $categoria->nomcate = $request->nomcate;
        $categoria->descate = $request->descate;
        $categoria->estado = $request->estado;

        $categoria->save();

        return response()->json($categoria,200);
    }


    public function eliminar_categorias(Request $request){
        $categori = Categoria::find($request->id);
        $categori->delete();

        return response()->json(['code'=>'Ok'],200);
    }


}
