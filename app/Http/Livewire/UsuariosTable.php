<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class UsuariosTable extends Component
{

    public $buscar;

    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';
        $usu = Usuarios::where('name', 'like', $buscarSQL)->orderBy('id', 'desc')->paginate(3);
     
      
        return view('livewire.usuarios-table',  compact('usu'));
    }

    public function cerrar(){
        return redirect()->route('usuarios');
    }
    
}
