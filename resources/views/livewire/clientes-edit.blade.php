<x-slot name="header">
<style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>

<div class="pl-40">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $titulo }}
    </h2>
  </div>
</x-slot>
<div class="pl-72 mt-5 pr-9 pb-8">
  <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="#" wire:submit.prevent='guardar' method="POST">
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-6 lg:col-span-1">
              <label for="cliente_numero" class="block text-sm font-medium text-gray-700">No. Cliente</label>
              <input type="text" wire:model='cli.cliente_numero' autocomplete="off" name="cliente_numero" id="cliente_numero" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="No. Cliente">
              @error('cli.cliente_numero')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-2">
              <label for="nombre_cliente" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
              <input type="text" wire:model='cli.nombre_cliente' autocomplete="off" name="nombre_cliente" id="nombre_cliente" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar nombre completo">
                    @error('cli.nombre_cliente')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
              <label for="apellido_paterno" class="block text-sm font-medium text-gray-700">Primer Apellido</label>
              <input type="text" wire:model='cli.apellido_paterno' autocomplete="off" name="apellido_paterno" id="apellido_paterno"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar primer apellido">
                    @error('cli.apellido_paterno')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-2">
              <label for="apellido_materno" class="block text-sm font-medium text-gray-700">Segundo apellido</label>
              <input type="text" wire:model='cli.apellido_materno' autocomplete="off" name="apellido_materno" id="apellido_materno" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar segundo apellido">
                    @error('cli.apellido_materno')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="razon_social" class="block text-sm font-medium text-gray-700">Razón social</label>
              <input type="text" wire:model='cli.razon_social' autocomplete="off" name="razon_social" id="razon_social" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar razón social">
                    @error('cli.razon_social')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>
            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
              <label for="rfc" class="block text-sm font-medium text-gray-700">RFC</label>
              <input type="text" wire:model='cli.rfc' name="rfc" autocomplete="off" id="rfc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar RFC">
                    @error('cli.rfc')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
              <input type="text" wire:model='cli.direccion' name="direccion" id="direccion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar dirección">
                    @error('cli.direccion')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="pais" class="block text-sm font-medium text-gray-700">País</label>
              <select id="pais" wire:model='cli.pais' name="pais" autocomplete="off" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option>Seleccionar país</option>
                <option>Estados unidos</option>
                <option>Canada</option>
                <option>México</option>
              </select>
              @error('cli.pais')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="correo_electronico" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
              <input type="text" wire:model='cli.correo_electronico' autocomplete="off" name="correo_electronico" id="correo_electronico" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar correo electrónico">
                    @error('cli.correo_electronico')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="telefono_movil" class="block text-sm font-medium text-gray-700">Teléfono móvil</label>
              <input type="text" wire:model='cli.telefono'  name="telefono" id="telefono" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar teléfono móvil" autocomplete="off">
                    @error('cli.telefono')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
              <label for="estado_cliente" class="block text-sm font-medium text-gray-700">Estado</label>
              <select id="estado_cliente" wire:model='cli.estado_cliente' name="estado_cliente" autocomplete="off" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option>Seleccionar estado</option>
                <option>Activo</option>
                <option>Inactivo</option>
              </select>
              @error('cli.estado_cliente')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

          </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          <button class="modal-open inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Guardar datos
          </button>
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-800 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <a href="{{ route('cliente.show') }}" :active="request()->routeIs('cliente.show')">Cancelar</a>
          </button>
        </div>
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
          <p class="text-2xl font-bold">¿Quieres guardar los datos actuales?</p>
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
          <button type="submit" class="px-4 bg-green-500 p-3 rounded-lg text-white hover:bg-green-400">Aceptar</button>
        </div>
        
      </div>
    </div>
  </div>

    </form>
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

    