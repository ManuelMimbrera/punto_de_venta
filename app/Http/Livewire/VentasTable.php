<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Existencia;
use App\Models\Producto;
use App\Models\Venta;
use Livewire\Component;

class VentasTable extends Component
{
    
    public $cli;
    public $prod;
    public $ideP;
    protected $rules=[
        'prod.precio' => 'required',
        'prod.name' => 'required',
        'prod.cantidad' => 'required',
        'cli.nombre_cliente' => 'required',
    ];

    protected $messages = [
        'prod.precio.required' => 'El campo sólo acepta números',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $clis = Cliente::all();
        $prods = Producto::all();
        return view('livewire.ventas-table',compact('prods','clis'));
    }

    public function consultarProd($id)
    {
        $this->prod = Producto::find($id);
        return $id;
    }

    public function consultarCli($id)
    {
        $this->cli = Cliente::find($id);
        return $id;
    } 
    
 
}
