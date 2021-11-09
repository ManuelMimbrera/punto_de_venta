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
}
