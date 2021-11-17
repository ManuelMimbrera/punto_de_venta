<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function categoria_producto(Request $request){

        return Producto::join('categorias','categorias.id','=','productos.id_categoria')
                            ->where('nomcate','=',$request->nomcate)
                            ->select('productos.*','categorias.nomcate')
                            ->get();
    }

    public function listar_productos(Request $request){

        return  Producto::join('categorias','categorias.id','=','productos.id_categoria')
                            ->where('nombre','like',$request->palabra)
                            ->select('productos.*','categorias.nomcate')->get();

        //$productos = Producto::all();

        //return $productos;
    }

    public function guarda_productos(Request $request){
        
        if($request->id == 0){
            $producto = new Producto();
        }else{
            $producto = Producto::find($request->id);
        }
        
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->id_categoria = $request->id_categoria;

        $producto->save();

        return response()->json($producto,200);
    }

    public function elimina_productos(Request $request){
        $product = Producto::find($request->id);
        $product->delete();

        return response()->json(['code'=>'Ok'],200);
    }
}
