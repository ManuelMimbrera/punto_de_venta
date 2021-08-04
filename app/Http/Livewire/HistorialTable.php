<?php

namespace App\Http\Livewire;

use App\Models\Caja;
use Livewire\Component;

class HistorialTable extends Component
{

public $buscar;


    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';

        $caja = Caja::join('users', 'users.id', '=', 'caja_arqueo.id_usuario')
        ->where('caja_arqueo.created_at', 'like', $buscarSQL)
        ->orWhere('caja_arqueo.updated_at', 'like', $buscarSQL)
        ->select('caja_arqueo.*', 'users.name')
        ->paginate(3);
        return view('livewire.historial-table', compact('caja'));
    }
}
