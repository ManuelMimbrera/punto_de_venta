<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ProductoTable extends Component
{
  use WithPagination;
  public $buscar;
  public $prod;
  public $titulo;

  
  public function activar($id){
      $producto = Producto::find($id);
      $producto->estado='Activo';
      $producto->save();
  }

  public function mount($id = null){
      if(is_null($id) ){
          return 'No se encontro producto';
      }else{
          $this->prod = Producto::find($id); 
          $iden = Producto::find($id); 
          session()->flash('alerta', $iden,'¿Está seguro que desea desactivar este producto?'); 
          return $id;
      }
    }

        
        public function render()
        {
        
          $buscarSQL = '%' . $this->buscar . '%';
          $produ = Producto::where('id','like',$buscarSQL)
          ->orWhere('name','like',$buscarSQL)->paginate(3);
          
          return view('livewire.producto-table', compact('produ'));
        }

        public function cerrar(){
          return redirect()->route('productos');
      }
  
      
      public function guardar(){
          $this->prod->estado='Desactivo';
          $this->prod->save();
          return redirect()->route('productos');
      }
    }


