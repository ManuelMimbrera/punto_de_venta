<?php

namespace App\Http\Livewire;

use App\Models\Caja;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CajaAperturaTable extends Component
{
    use AuthorizesRequests;
    public $fecha;
    
    public $status;
    public $titulo;
    public $caja;


    protected $rules = [
        'caja.caja' => 'required|min:1',
        'caja.monto_apertura' => 'required|numeric',
        'caja.monto_cierre' => 'required|numeric'
    ];

    protected $messages = [
        'caja.caja.required' => "El campo Caja es obligatorio.",
        'caja.caja.min' => 'El maximo de caracteres debe ser menor a 4',
        
        'caja.monto_apertura.required' => "El campo Monto Apertura es obligatorio.",
        'caja.monto_apertura.numeric' => 'El Monto Apertura debe ser numerico.',
        
        'caja.monto_cierre.required' => "El campo Monto Cierre es obligatorio.",
        'caja.monto_cierre.numeric' => 'El Monto Cierre debe ser numerico.',
     
    ];

    public function mount($id = null, $ideliminar = null)
    {

        if (is_null($id) && is_null($ideliminar)) {
            $this->caja = new Caja();
        } elseif (is_null($id)) {
            $this->caja = Caja::find($ideliminar);
            $this->caja->delete();
            return redirect()->route('caja-form');
        } else {
            $this->caja = Caja::find($id);
            return $id;
        }
    }


    public function render()
    {
        $caja = Caja::all();
        return view('livewire.caja-apertura-table', compact('caja'));
    }

    public function save()
    {
        $this->validate();
        $fecha = Carbon::now();
        $this->caja->status;

        if ($this->caja->status == "") {
            $status = "Abierta";            
            $this->caja->status = $status;
            $this->caja->fecha_inicial = $fecha;
        } elseif ($this->caja->status == "Abierta") {
            $status = "Cerrada";
            $this->caja->status = $status;
            $this->caja->fecha_final = $fecha;
        }
        if(is_null($this->caja->id_usuario)){
            $this->caja->id_usuario = Auth::user()->id;
        }
        $this->authorize('update',$this->caja);
        $this->caja->save();
        return redirect()->route('caja-form');
        
    }
}
