<x-slot name="header">
<div class="pl-40">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $titulo }}
    </h2>
  </div>
</x-slot>
<div class="pl-72 mt-5 pr-9 pb-8">
  <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="#" wire:submit.prevent='save' method="POST">
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="id" class="block text-sm font-medium text-gray-700">Codigo</label>
              <input type="text" wire:model='prod.id' id="id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Codigo del producto">
              @error('prod.id')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
              <input type="text" wire:model='prod.name' id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Nombre del producto">
              @error('prod.name')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripcion</label>
              <input type="text" wire:model='prod.descripcion' id="descripcion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Descripción del producto">
              @error('prod.descripcion')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-2">
              <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
              <input type="text" wire:model='prod.precio' id="precio" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="$00.00">
                    @error('prod.precio')
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
          <a href="{{ route('productos') }}" :active="request()->routeIs('productos')">Cancelar</a>
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