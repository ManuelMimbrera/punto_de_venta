<x-slot name="header">
<div class="pl-40">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $titulo }}
    </h2>
  </div>
</x-slot>


<div class="pl-64 mt-5 pr-9 pb-8 max-w-screen-md">
  <div class="mt-5 md:mt-0 md:col-span-2">
  <h1 class="text-3xl font-bold text-gray-500 my-4 pr-5">
       
      </h1>
    <form action="#" wire:submit.prevent='guardar' method="POST">
    
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-6 ">
            <div class="col-span-6 sm:col-span-6 ">
              <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
              <input type="text" wire:model='usu.name' id="name" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar usuario">
              @error('usu.name')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div><br>
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="password" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
              <input type="text" wire:model='usu.email' id="email" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Correo electrónico">
              @error('usu.email')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div><br>

            
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label class="block text-sm font-medium text-gray-700">Contraseña</label>
              <input type="password" wire:model='usu.password' id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ingresar contraseña">
              @error('usu.password')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div><br>



            <div class="col-span-4 sm:col-span-3 lg:col-span-2">
              <label for="rol" class="block text-sm font-medium text-gray-700">ROL</label>
              <select wire:model='usu.rol' id="rol"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option>Seleccionar opcion</option>
                <option>Vendedor</option>
                <option>Administrador</option>
              </select>
              @error('usu.rol')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Guardar datos
          </button>
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-800 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <a href="{{ route('usuarios') }}" :active="request()->routeIs('usuarios')">Cancelar</a>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

<div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                      <div class="border-t border-gray-200"></div>
                    </div>
                  </div>

</div>

