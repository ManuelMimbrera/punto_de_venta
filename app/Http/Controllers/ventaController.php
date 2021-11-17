<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class ventaController extends Controller
{
    public function guarda_venta(Request $request){
        
        $venta = new Venta();

        $venta->total = $request->total;
        $venta->id_producto = $request->id_producto;
        $venta->cantidad = $request->cantidad;
        $venta->pago = $request->pago;
        $venta->direccion = "Alguna";
        $venta->estatus = "En proceso";

        $venta->save();

        return response()->json($venta,200);
    }
}
