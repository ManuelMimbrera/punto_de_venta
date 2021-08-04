<x-slot name="header">
    <div class="pl-44">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historial de caja') }}
        </h2>
    </div>
</x-slot>
<div>

                <div class="pt-5 pl-10 flex-1 overflow-hidden  max-w-2xl sm:rounded-lg">
                
                <h1 class=" pt-2 text-3xl font-bold text-gray-500 float-left pl-5">
                        Cajas registradas
                    </h1><br><br>
                
                    <!-- Buscador -->
                    <div class="flex-1 p-4">
                        <div class="relative md:w-2/3 float-left">
                            <input type="search" wire:model="buscar" class="w-full pl-10  pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium border-gray-300" placeholder="Buscar">
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
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                
                    <table class="min-w-full divide-y divide-gray-200">

                        <thead class="bg-blue-500">
                            <tr>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Usuario
                                </th>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                  Fecha de creación
                                </th>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Fecha de actualización 
                                </th>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Caja
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($caja as $cajita)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cajita->name}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cajita->created_at}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cajita->updated_at}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cajita->caja}}</div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>