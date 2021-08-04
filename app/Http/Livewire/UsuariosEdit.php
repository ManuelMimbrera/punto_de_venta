<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class UsuariosEdit extends Component
{
    use AuthorizesRequests;
    public Usuarios $usu;
    public $titulo;

    protected $rules = [
        'usu.name' => 'required',
        'usu.email' => 'required',
        'usu.password' => 'required',
        'usu.rol' => 'required'
    ];

    protected $messages = [
        'usu.name.required' => 'El campo nombre no puede estar vacío',
        'usu.email.required' => 'El campo email no puede estar vacío',
        'usu.password.required' => 'El campo password no puede estar vacío',
        'usu.rol.required' => 'El campo email no puede estar vacío',
        
    ];
    
    public function mount($id = null, $ideliminar = null){

        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = 'Nuevo usuario';
            $this->usu = new Usuarios();

        }else if(is_null($id)){
            $this->usu = Usuarios::find($ideliminar);
            $this->usu->delete();
         
            return redirect()->route('usuarios');
        }else{
            $this->titulo = 'Actualizar usuario';
            $this->usu = User::find($id);
            $this->usu->password=Crypt::decrypt($this->usu->password);
            
            

        }
        
    }

    public function render()
    {
        return view('livewire.usuarios-edit');
    }

public function guardar(){

    $this->validate();
    $this->usu->password=Crypt::encrypt($this->usu->password);
    if(is_null($this->usu->id)){
    $this->usu->id = Auth::user()->id;
}
    $this->authorize('update',$this->usu);
    
    $this->usu->save();
    return redirect()->route('usuarios');
}

}