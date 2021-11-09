<x-slot name="header">
  <div class="pl-44">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Tablero') }}
    </h2>
  </div>
</x-slot>

<div class="grid grid-cols-3 gap-4 pl-7 pt-5 pr-7 ">
  <!--Metric Card-->
  
    <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
      <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
          <div class="rounded-full p-5 bg-blue-600"><i>

              <svg class="w-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
              </svg>
            </i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
          <h5 class="font-bold uppercase text-gray-600">Clientes</h5>
          <h3 class="font-bold text-3xl">{{ $contCli }}<span class="text-green-500"><i></i></span></h3>
          <br>
          <h2 class="text-right"><a href="{{ route('cliente.show') }}" :active="request()->routeIs('cliente.show')">ver detalles</a></h2>
        </div>
      </div>
    </div>
  
  <!--/Metric Card-->
  <!--Metric Card-->
  
    <div class="hover:bg-gradient-to-b from-puple-500 to-purple-300 bg-gradient-to-b from-purple-200 to-purple-100 border-b-4 border-purple-600 rounded-lg shadow-xl p-5">
      <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
          <div class="rounded-full p-5 bg-purple-600"><i>
              <svg class="w-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
              </svg>
            </i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
          <h5 class="font-bold uppercase text-gray-600">Productos</h5>
          <h3 class="font-bold text-3xl">{{ $contProd }}<span class="text-green-500"><i></i></span></h3><br>
          <h2 class="text-right"><a href="{{ route('productos') }}" :active="request()->routeIs('productos')">ver detalles</a></h2>
        </div>
      </div>
    </div>
  
  <!--/Metric Card-->
  <!--Metric Card-->
  
    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
      <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
          <div class="rounded-full p-5 bg-green-600"><i>
              <svg class="w-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
          <h5 class="font-bold uppercase text-gray-600">Ventas</h5>
          <h3 class="font-bold text-3xl">889<span class="text-green-500"><i></i></span></h3>
          <br>
          <h2 class="text-right"><a href="{{ route('cliente.show') }}" :active="request()->routeIs('cliente.show')">ver detalles</a></h2>
        </div>
      </div>
    </div>
  </a>
  <!--/Metric Card-->
  <!--Metric Card-->
  <a >
    <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
      <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
          <div class="rounded-full p-5 bg-red-600"><i>
              <svg class="w-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
            </i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
          <h5 class="font-bold uppercase text-gray-600">Usuarios</h5>
          <h3 class="font-bold text-3xl">{{ $contUser}}<span class="text-green-500"><i></i></span></h3>
          <br>
          <h2 class="text-right"><a href="{{ route('usuarios') }}" :active="request()->routeIs('cliente.show')">ver detalles</a></h2>
        </div>
      </div>
    </div>
  
  <!--/Metric Card-->
  <!--Metric Card-->

    <div class="hover:bg-gradient-to-b from-yellow-500 to-yellow-300 bg-gradient-to-b from-yellow-200 to-yellow-100 bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
      <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
          <div class="rounded-full p-5 bg-black"><i>
              <svg class="w-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
              </svg>
            </i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
          <h5 class="font-bold uppercase text-gray-600 ">Compras</h5>
          <h3 class="font-bold text-3xl">99<span class="text-green-500"><i></i></span></h3>
          <br>
          <h2 class="text-right"><a href="{{ route('cliente.show') }}" :active="request()->routeIs('cliente.show')">ver detalles</a></h2>
        </div>
      </div>
    </div>
  
  <!--/Metric Card-->
  

</div>
