
<div>
    <x-slot name="header">
    <div class="pl-44">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
        </div>
    </x-slot>
    <div class="pr-10">
    <div class="flex flex-col">
        <div class="sm:-mx-6 lg:-mx-2 pl-10">
            <div class="pl-5 mt-5">
                  <div class="mt-10 sm:mt-0">
                      <div class="mt-5 md:mt-0 md:col-span-2">
                          <div class="shadow overflow-hidden sm:rounded-md">

                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div>
                          <div class="tab w-full overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                            <label class="block p-5 leading-normal cursor-pointer" for="tab-single-one">Lista de clientes</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                              <div class="mt-1 relative">
                              @foreach ($clis as $cli)
                              <button wire:click="consultarCli({{$cli->id}})" type="button" class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <span class="flex items-center">
                                  <span class="ml-3 block truncate">
                                    {{$cli->nombre_cliente}} {{$cli->apellido_paterno}} {{$cli->apellido_materno}}
                                  </span>
                                </span>
                              </button>
                              @endforeach
                            </div>
                            </div>
                         </div>

                          <div class="px-4 py-5 bg-white sm:p-6">   
                            <div class="grid grid-cols-6 gap-6">  
                              <div class="col-span-6 sm:col-span-3">
                                <label for="first_name"  class="block text-sm font-medium text-gray-700">Cliente atendido *</label>
                                <input type="text"  wire:model='cli.nombre_cliente'  id="cliente" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>
                            </div>
                          </div>
                        <br>

                        <div class="tab w-full overflow-hidden border-t">
                          <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                          <label class="block p-5 leading-normal cursor-pointer" for="tab-single-two">Lista de productos</label>
                          <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                              <div class="py-1">
                                @foreach ($prods as $prod)
                                  <button wire:click="consultarProd({{$prod->id}})" class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <span class="flex items-center">
                                      <span class="ml-3 block truncate">
                                      {{$prod->name}}
                                      </span>
                                    </span>
                                  </button>
                                @endforeach
                              </div>
                          </div>
                       </div>
                        <br>

                        <div id="Select" class="grid grid-cols-6 gap-6 m-4">
                          <div class="col-span-6 sm:col-span-3">
                            <label for="first_name"  class="block text-sm font-medium text-gray-700">Nombre del producto *</label>
                            <input type="text" wire:model='prod.name' name="nombre" id="nombre" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <p class="mt-1 text-sm text-red-600">
                            </p>
                          </div>
            
                          <div class="col-span-6 sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Precio del producto *</label>
                            <input type="text" wire:model='prod.precio' name="precio" id="precio" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <p class="mt-1 text-sm text-red-600">
                              @error('prod.precio') <span class="error">{{ $message }}</span> @enderror
                          </p>
                          </div>
            
                          <div class="col-span-6 sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Cantidad *</label>
                            <input type="text" name="cantidad" id="cantidad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <p class="mt-1 text-sm text-red-600">
                              
                          </p>
                          </div>

                        </div>
                        <br>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                          <button onclick="agregar()" id="agregar" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
                            Agregar
                          </button>
                        </div>
                        <br>

                        <table id="tablaP" class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                              <tr>
                              <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Producto
                               </th>
                              <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Precio
                              </th>
                              <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Cantidad
                              </th>
                              <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Cliente
                              </th>
                              <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Total
                            </th>
                               </tr>                        
                          </thead>
                          </table>

                          <br>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                              <a href= "{{route('reporte.ventas')}}" target="_blank">
                              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
                                Guardar
                              </button>
                            </a>
                            </div>
                          </div>
                      </div>
                    </div>
                  
                  
                  <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                      <div class="border-t border-gray-200"></div>
                    </div>
                  </div>
                  </div>
            </div>
        </div>
    </div>
</div>



@push('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
  /* Optional Javascript to close the radio button version by clicking it again */
  var myRadios = document.getElementsByName('tabs2');
  var setCheck;
  var x = 0;
  for(x = 0; x < myRadios.length; x++){
      myRadios[x].onclick = function(){
          if(setCheck != this){
               setCheck = this;
          }else{
              this.checked = false;
              setCheck = null;
      }
      };
  }
</script>

  <script>

  $('#agregar').click(function(){
    agregar();
  });

  function agregar(){
    var nombre=$('#nombre').val();
    var precio=$('#precio').val();
    var cantidad=$('#cantidad').val();
    var cliente=$('#cliente').val();

    function validaVacio(valor) {
        valor = valor.replace("&nbsp;", "");
        valor = valor == undefined ? "" : valor;
        if (!valor || 0 === valor.trim().length) {
            return true;
            }
        else {
            return false;
            }
        }

        var total = precio*cantidad;
    
    if ( validaVacio(nombre) || validaVacio(precio) || validaVacio(cantidad) || validaVacio(cliente)) {   
        alert("Los campos no pueden quedar vacíos");
        return false;
    }else{ 
    var fila='<tr>'+
      '<td class="text-center">'+nombre+'</td>'+
      '<td class="text-center">'+precio+'</td>'+
      '<td class="text-center">'+cantidad+'</td>'+
      '<td class="text-center">'+cliente+'</td>'+
      '<td class="text-center">'+total+'</td>'+
      '<td><button type="submit" id="DeleteButton" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-900 hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="-ml-1 mr-2 h-5 w-5 bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>Eliminar</button></td>'+
      '</tr>'
      $('#tablaP').append(fila);
    return true; 
  }

  
} 
$('#tablaP').on("click","#DeleteButton",function() {
    $(this).closest("tr").remove();
  });
  </script>
  
@endpush


