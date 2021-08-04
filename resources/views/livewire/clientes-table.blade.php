 <div>
 <script src="{{asset('../js/app.js')}}"></script>
<x-slot name="header">
<div class="pl-40">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </div>
</x-slot>
<div class="pr-10">
    <div class="flex flex-col">
        <div class="sm:-mx-6 lg:-mx-2 pl-10">
            <div class="pl-5 mt-5">
            
<h1 class="text-3xl font-bold text-gray-500 float-left pr-5">
       Listado de clientes 
      </h1>
        
                <button class="flex items-center px-2 py-2 h-9 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-700 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none  dark:focus:bg-gray-700">
                <svg class="w-5 h-6 mx-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="-ml-1 mr-2 h-5 w-5 bi bi-plus-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                    <span class="mx-1 pr-2"><a href="{{ route('cliente.register') }}" :active="request()->routeIs('cliente.register')">Nuevo</a></span>
                </button>
                     
            </div>
            
            <div class="py-2  min-w-full sm:px-2 lg:px-2 ">
                <div class="border-b border-gray-200 sm:rounded-lg">
                    <!-- Buscador -->
                    <div class="flex-1 p-4 ">
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
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                
                    <table class="min-w-full divide-y divide-gray-200">

                        <thead class="bg-blue-500">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Nombre completo
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Razón social
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    RFC
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Teléfono
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Estado
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Gestión
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($cli as $cliente)
                            @can('view', $cliente)

                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cliente->cliente_numero}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cliente->nombre_cliente}} {{$cliente->apellido_paterno}} {{$cliente->apellido_materno}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$cliente->razon_social}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"> {{$cliente->rfc}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"> {{$cliente->telefono}}</div>
                                </td>
                                @if ($cliente->estado_cliente=='Activo')
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <div class="text-sm text-green-800"> {{$cliente->estado_cliente}}</div>
                                    </span>
                                </td>
                                @else
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-700">
                                    <div class="text-sm text-red-800"> {{$cliente->estado_cliente}}</div>
                                    </span>
                                </td>
                                @endif
                                @if ($cliente->estado_cliente=='Activo')
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-md dark:bg-gray-800 hover:bg-yellow-300 dark:hover:bg-gray-700 focus:outline-none  dark:focus:bg-gray-700">
                                        <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="mx-1"><a href="{{route('cliente.edit',$cliente->id)}}">Actualizar</a></span>
                                    </button><br>
                                    <button class="flex items-center px-2 py-2 pr-5 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-900 rounded-md dark:bg-gray-800 hover:bg-red-700 dark:hover:bg-gray-700 focus:outline-none  dark:focus:bg-gray-700">
                                        <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <span class="mx-1"><a href="{{route('cliente.delete',$cliente->id)}}">Eliminar</a></span>
                                    </button>
                                </td>
                                @else
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="flex items-center px-2 py-2 pr-5 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-900 rounded-md dark:bg-gray-800 hover:bg-red-700 dark:hover:bg-gray-700 focus:outline-none  dark:focus:bg-gray-700">
                                        <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <span class="mx-1"><a href="{{route('cliente.delete',$cliente->id)}}">Eliminar</a></span>
                                    </button>
                                </td>
                                @endif

                            </tr>
                            @endcan
                            @endforeach
                            <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">&nbsp;
    <div class="pl-12">
    {{ $cli->links() }}
    </div>
    </div>
    </div>

</div><br><br><br><br><br><br><br>


</div>


    



    