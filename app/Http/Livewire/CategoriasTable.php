<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriasTable extends Component
{
    use WithPagination;
    public $buscar;
    public $cate;
    public $ideliminar;
    public $ide;
    public $adm;
    
    

    public function mount(){
        $this->adm = request()->user()->rol == "Administrador";
    }

    public function render()
    {
        $buscarSQl = '%' . $this->buscar . '%';
        $cates = Categoria::join('users','users.id','=','categorias.id_usuario')
                            ->where('nomCate','like',$buscarSQl)
                            ->orwhere('desCate','like',$buscarSQl)
                            ->select('categorias.*','users.name')
                            ->orderBy('categorias.id')
                            ->paginate(4);      
        return view('livewire.categorias-table',compact('cates'));
    }

    public function activar($id){
        $this->cate = Categoria::find($id);
        $this->cate->estado='Activo';
        $this->cate->save();
    }
    
    public function desactivarCate(){
        $cate = Categoria::find($this->ide);  
        $cate->estado='Desactivo';
        $cate->save();
    }
    
    public function cerrar(){
        return redirect()->route('categorias');
    }

    public function eliminar(){
        $cate = Categoria::find($this->ideliminar);
        $cate->delete();
    }
    
}
