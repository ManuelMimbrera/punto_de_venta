<x-slot name="header">
    <div class="pl-44">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cajas') }}
        </h2>
    </div>
</x-slot>
<div><br><br>
    <div class="flex rounded-lg shadow-lg p-3.5 w-9/12 bg-gray-200 border-2 border-white container mx-auto">
        <div class="grid grid-cols-3 gap-4 pl-4">
            <a href="{{ route('caja.apertura') }}" :active="request()->routeIs('caja.apertura')" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 ...">
                <div class="hover:bg-gradient-to-l from-black to-black bg-gradient-to-b from-black to-black bg-gradient-to-b from-black to-black  rounded-lg shadow-xl p-2">
                    <div class="flex flex-row items-center">

                        <div class="flex-shrink pr-6">
                            <div><i>
                                    <svg class="w-24 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                    </svg>
                                </i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-black uppercase text-white text-2xl pr-12">Abrir caja</h5>
                        </div>
                    </div>
                </div>


                <a href="{{ route('ventas') }}" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 ...">
                    <div class="bg-gradient-to-b from-red-800 to-red-100 bg-gradient-to-b from-red-100 to-red-500  rounded-lg shadow-xl p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-2">
                                <div><i>
                                        <svg class="w-24 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-black uppercase text-white text-2xl ">Ventas</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('historial.show') }}" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 ...">
                    <div class="hover:bg-gradient-to-l from-green-700 to-green-700 bg-gradient-to-b from-green-700 to-green-700 bg-gradient-to-b from-green-700 to-green-700  rounded-lg shadow-xl p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div><i>

                                        <svg class="w-24 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                    </i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-black uppercase text-white text-2xl ">Historial</h5>
                            </div>
                        </div>
                    </div>
                </a>
        </div>
    </div>

    <div class="pr-10">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-10 pl-3">
                <div class="pl-12 mt-5">

                    <h1 class="text-3xl font-bold text-gray-500 float-left pr-5">
                        Lista de cajas
                    </h1>
                    <div class="w-5 mr-2 transform text-gray-400 hover:text-red-700 float-left pl-96 ml-14 absolute">
                        <a target="_blank" href="{{route('caja.reporte')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-12" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                            </svg>
                            Generar Reporte
                        </a>

                    </div>

                </div><br>

                <div class="py-2 sm:px-2 lg:px-2">
                    <div class="sm:rounded-lg">
                        <!-- Buscador -->
                        <div class="flex-1 p-4 pl-10">
                            <div class="relative md:w-1/3 float-left">
                                <input type="search" wire:model="buscar" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium border-gray-300" placeholder="Buscar">
                                <div class="absolute top-0 left-0 inline-flex items-center p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </div>

                            </div>


                        </div>
                        <br><br>
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-2">
                                <div class="py-2 align-middle min-w-full sm:px-6 lg:px-10">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">

                                            <thead class="bg-blue-500">
                                                <tr>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        ID
                                                    </th>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Fecha apertura
                                                    </th>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Fecha cierre
                                                    </th>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Monto apertura
                                                    </th>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Monto cierre
                                                    </th>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="text-center px-2 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Caja
                                                    </th>
                                                    <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                        Gestión
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach($caja as $cajita)

                                                <tr>

                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900  text-center">{{$cajita->id}}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 text-center">{{$cajita->fecha_inicial}}</div>
                                                    </td>
                                                    @if ($cajita->status=='Abierta')
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 text-center">
                                                            Aun no ha cerrado
                                                        </span>
                                                    </td>
                                                    @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 text-center">{{$cajita->fecha_final}}</div>
                                                    </td>
                                                    @endif
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 text-center">{{$cajita->monto_apertura}}</div>
                                                    </td>
                                                    @if ($cajita->status=='Abierta')
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 text-center">
                                                            Aun no ha cerrado
                                                        </span>
                                                    </td>
                                                    @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 text-center"> {{$cajita->monto_cierre}}</div>
                                                    </td>
                                                    @endif
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 text-center"> {{$cajita->status}}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 text-center"> {{$cajita->caja}}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        @if ($cajita->status=='Abierta')

                                                        <div class="w-5 mr-2 transform text-yellow-500 hover:text-yellow-300 hover:scale-110 float-left">
                                                            <a href="{{route('apertura.edit',$cajita->id)}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                                                                </svg></a>
                                                        </div>
                                                        @else
                                                        <div class="w-5 mr-2 transform hover:text-black hover:scale-110 float-left">
                                                            <a href="{{route('apertura.edit',$cajita->id)}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                                                </svg></a>
                                                        </div>
                                                        <div class="modal-open w-5 mr-2 transform text-red-500 hover:text-red-800 hover:scale-110 float-left">
                                                            <a> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg></a>
                                                        </div>

                                                        @endif

                                                    </td>

                                                </tr>

                                                @endforeach
                                                <!-- More items... -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex content-end bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-2">
                                      &nbsp;
                                        <div class="pl-12 ">

                                            {{ $caja->links() }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><br><br><br><br><br><br><br>


                </div>
                    <!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">Cerrar</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">¿Seguro que quieres eliminar esta caja?</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <p></p>
        <p></p>
        <p>Cierra la pestaña para cancelar</p>
        
  

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <a href="{{route('caja.delete',$cajita->id)}}" class="px-4 bg-red-700 p-3 rounded-lg text-white hover:bg-red-400">
          <svg class="w-6 float-left" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
             &nbsp; Aceptar
          </a>
        </div>
        
      </div>
    </div>
  </div>

  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
