<?php

namespace App\Http\Livewire;

use App\Models\Movimientos;
use Carbon\Carbon;
use Livewire\Component;

class MovimientosTable extends Component
{

    public $fecha;
    public $buscar;

    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';
        $mov = Movimientos::where('fecha', 'like', $buscarSQL)->orderBy('id', 'desc')->paginate(3);
    
        return view('livewire.movimientos-table', compact('mov'));
    }

    public function save(){
        $this->validate();
        $fecha = Carbon::now();
        $this->mov->fecha_inicial = $fecha;
        if(is_null($this->mov->nombre_accion)){
            $this->mov->nombre_accion="Insert";
    }else{
        $this->mov->nombre_accion="Update";
    }
    

    }

}