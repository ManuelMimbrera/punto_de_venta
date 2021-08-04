<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClientesTable extends Component
{
    public $buscar;

    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';
        $cli = Cliente::where('cliente_numero', 'like', $buscarSQL)->orderBy('id', 'desc')->paginate(3);
    
        return view('livewire.clientes-table', compact('cli'));
    }
    public function cerrar(){
        return redirect()->route('categorias');
    }

}
