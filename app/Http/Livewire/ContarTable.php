<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Livewire\Component;

class ContarTable extends Component
{

    public function render()
    {
        $contCli = Cliente::all()->count();
        $contProd = Producto::all()->count();
        //$contProd = Categoria::all()->count();
        $contUser = User::all()->count();
        return view('dashboard', compact('contCli','contProd','contUser'));
    }
}
