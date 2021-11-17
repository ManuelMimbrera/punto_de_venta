<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function listar_promocion(Request $request){

        return Promocion::where('nombre_promocion','like',$request->promo)->get();
        
       // $cliente = Cliente::all();

        //return $cliente;
    }//

    public function guardar_promocion(Request $request){
        if($request->id == 0){
            $promocion = new Promocion();
        }else{
            $promocion = Promocion::find($request->id);
        }
        $promocion->nombre_promocion = $request->nombre_promocion;
        $promocion->nombre_producto = $request->nombre_producto;
        $promocion->descripcion = $request->descripcion;

        $promocion->save();

        return response()->json($promocion,200);
    }

    public function eliminar_promocion(Request $request){
        $promocion = Promocion::find($request->id);
        $promocion->delete();
        return response()->json(['code'=>'Ok'],200);
    }
}
