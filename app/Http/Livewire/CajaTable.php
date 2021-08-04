<?php

namespace App\Http\Livewire;

use App\Models\Caja;
use Livewire\Component;

class CajaTable extends Component
{
    public $buscar;

    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';
        $caja = Caja::where('id', 'like', $buscarSQL)->orderBy('id', 'desc')->paginate(3);
        
        return view('livewire.caja-table', compact('caja'));
    }
    
}
