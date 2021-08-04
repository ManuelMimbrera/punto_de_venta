<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ProductoEditTable extends Component
{
    public $prod;
    public $titulo;

    protected $rules = [
        'prod.id' => 'required',
        'prod.name' => 'required',
        'prod.descripcion' => 'required',
        'prod.precio' => 'required'
    ];

    protected $messages = [
        'prod.id.required' => 'El campo codigo no puede estar vacío',
        'prod.name.required' => 'El campo nombre no puede estar vacío',
        'prod.descripcion.required' => 'El campo descripción no puede estar vacío',
        'prod.precio.required' => 'El campo precio no puede estar vacío',
        'prod.id.min' => 'El campo codigo no puede estar vacío',
        'prod.name.min' => 'El campo nombre no puede estar vacío',
        'prod.descripcion.min' => 'El campo descripción no puede estar vacío',
        'prod.precio.min' => 'El campo precio no puede estar vacío',
        'prod.precio.numeric' => 'El campo precio debe ser numerico',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id = null, $ideliminar = null){

        if(is_null($id) && is_null($ideliminar) ){
            $this->titulo = 'Nuevo producto';
            $this->prod = new Producto(); 
         }elseif(is_null($id)){
             $this->prod = Producto::find($ideliminar);
             $this->prod->delete();
             session()->flash('exito', 'El registro fue eliminado exitosamente');
             return redirect()->route('productos');
         }else{
             $this->titulo = 'Actualizar producto';
             $this->prod = Producto::find($id); 
             return $id;
         } 
    }
    
    public function render(){

        return view('livewire.producto-edit-table');
    }

    public function save(){
        $this->validate();
        $this->prod->estado = 'Activo';
        session()->flash('exito', 'El registro fue guardado exitosamente');
        $this->prod->save();
        return redirect()->route('productos');
    }

    public function destroy($id){
        $prod = Producto::findOrFail($id);
        $prod->delete();

        return redirect()->route('productos');

    }
}
