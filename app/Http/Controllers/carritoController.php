<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carritoController extends Controller
{
    public function listar_carrito(Request $request){

        return Carrito::join('productos','productos.id','=','carritos.id_producto')
                            ->where('productos.nombre','like',$request->product)
                            ->select('productos.*','carritos.*')
                            ->get();
        //$carrito = Carrito::all();

        //return $carrito;
    }


    public function guarda_carrito(Request $request){
        
        $carritos = new Carrito();
        
        $carritos->id_producto = $request->id_producto;
        $carritos->cantidad = $request->cantidad;

        $carritos->save();

        return response()->json($carritos,200);
    }

    public function elimina_carrito(Request $request){
        $car = Carrito::find($request->id);
        $car->delete();

        return response()->json(['code'=>'Ok'],200);
    }

    public function suma_carrito(Request $request){

      $carrito = DB::table('carritos',$request->product)
      ->select(DB::raw('SUM(carritos.costo) as total'))
                    ->get();
    
    //    $carrito = Carrito::all();
        return $carrito;
    }

}
