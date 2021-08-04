<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ClientesEdit extends Component
{

    use AuthorizesRequests;
    public Cliente $cli;
    public $titulo;

    protected $rules = [
        'cli.cliente_numero' => 'required|max:10', 
        'cli.nombre_cliente' => 'required|max:50',
        'cli.apellido_paterno' => 'required|max:30',
        'cli.apellido_materno' => 'required|max:30',
        'cli.razon_social'=> 'required|max:50',
        'cli.rfc'=> 'required|max:15',
        'cli.direccion' => 'required|max:200',
        'cli.pais'=> 'required',
        'cli.correo_electronico'=> 'required|max:50|',
        'cli.telefono'=> 'required',
        'cli.estado_cliente'=> 'required'
    ];

    protected $messages = [
        'cli.cliente_numero.required' => "El campo No. Cliente es obligatorio.",
        'cli.cliente_numero.max' => 'El Número de Cliente no puede tener más de 10 caracteres.',
        
        'cli.nombre_cliente.required' => "El campo Nombre Completo es obligatorio.",
        'cli.nombre_cliente.max' => 'El Nombre Completo no puede tener más de 50 caracteres.',
        
        'cli.apellido_paterno.required' => "El campo Primer Apellido es obligatorio.",
        'cli.apellido_paterno.max' => 'El Nombre Completo no puede tener más de 30 caracteres.',
        
        'cli.apellido_materno.required' => "El campo Segundo Apellido es obligatorio.",
        'cli.apellido_materno.max' => 'El Nombre Completo no puede tener más de 30 caracteres.',

        'cli.razon_social.required' => "El campo Razón Social es obligatorio.",
        'cli.razon_social.max' => 'El campo Tipo de Documento no puede tener más de 100 caracteres.',

        'cli.rfc.required' => "El campo RFC es obligatorio.",
        'cli.rfc.max' => 'El campo RFC no puede tener más de 15 caracteres.',

        'cli.direccion.required' => "El campo Dirección es obligatorio.",
        'cli.direccion.max' => 'El campo Direccion no puede tener más de 200 caracteres.',

        'cli.pais.required' => "El campo País es obligatorio.",

        'cli.correo_electronico.required' => "El campo Correo Electrónico es obligatorio.",

        'cli.telefono.required' => "El campo Teléfono Móvil es obligatorio.",
        
        'cli.estado_cliente.required' => "El campo Estado Cliente es obligatorio."
        
    ];

    public function mount($id = null, $ideliminar = null){

        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = 'Nuevo cliente';
            $this->cli = new Cliente();
        }else if(is_null($id)){
            $this->cli = Cliente::find($ideliminar);
            $this->cli->delete();
            return redirect()->route('cliente.show');
        }else{
            $this->titulo = 'Actualizar cliente';
            $this->cli = Cliente::find($id);
        }
        
    }

    public function render()
    {   
        
        return view('livewire.clientes-edit');
    }

    public function guardar(){

        $this->validate();

        if(is_null($this->cli->id_usuario)){
        $this->cli->id_usuario = Auth::user()->id;
    }
        $this->authorize('update',$this->cli);
        
        $this->cli->save();
        return redirect()->route('cliente.show');
    }

}
