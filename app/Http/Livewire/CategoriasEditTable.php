<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoriasEditTable extends Component
{
    public $cate;
    public $titulo; 
    protected $rules=[
        'cate.nomCate' => 'required|min:2|max:20',
        'cate.desCate' => 'required|min:10|max:100',
    ];

    protected $messages = [
        'cate.nomCate.required' => 'El campo nombre no puede estar vacío',
        'cate.desCate.required' => 'El campo descripción no puede estar vacío',
        'cate.desCate.min' => 'El campo descripcion categoría debe de tener mínimo 2 caracteres',
        'cate.nomCate.min' => 'El campo nombre categoría debe de tener mínimo 2 caracteres',
        'cate.desCate.max' => 'El campo descripción debe de tener mínimo 100 caracteres',
        'cate.nomCate.max' => 'El campo nombre categoría debe de tener maximo 20 caracteres'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id = null, $ideliminar = null){


        if(is_null($id) && is_null($ideliminar) ){
           $this->titulo = 'Nueva categoría';
           $this->cate = new Categoria(); 
        }elseif(is_null($id)){
            $this->cate = Categoria::find($ideliminar);
            $this->cate->delete();
            session()->flash('exito', 'El registro fue eliminado exitosamente');
            return redirect()->route('categorias');
        }else{
            $this->titulo = 'Editar categoría';
            $this->cate = Categoria::find($id); 
            return $id;
        } 


    }
    
    public function render()
    {
        return view('livewire.categorias-edit-table');
    }
    public function guardar(){

        
        $this->validate();
        if(is_null($this->cate->id_usuario)){
            $this->cate->id_usuario = Auth::user()->id;
        }
        $this->cate->estado = 'Activo';
        $this->cate->save();
        return redirect()->route('categorias');
        
    }
    
}
