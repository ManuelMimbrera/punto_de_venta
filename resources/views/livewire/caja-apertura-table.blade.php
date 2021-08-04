<x-slot name="header">
    <div class="pl-44">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apertura de caja') }}
        </h2>
    </div>
</x-slot>
<div class="flex">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="m-6 align-middle inline-block sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="text-3xl text-black text-right">Monedas</div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-500">
                        <tr>
                            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Denominación
                            </th>
                            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Cantidad
                            </th>
                            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Valor
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">10 Centavos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" name="cen10" id="cen10" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">0.10</div>
                            </td>

                        </tr>


                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">20 Centavos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" name="cen20" id="cen20" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">0.20</div>
                            </td>

                        </tr>
                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">50 Centavos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" name="cen50" id="cen50" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">0.50</div>
                            </td>

                        </tr>
                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">1 Pesos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" name="p1" id="p1" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">1.00</div>
                            </td>

                        </tr>
                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">5 Pesos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" name="p5" id="p5" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">5.00</div>
                            </td>

                        </tr>
                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">10 Pesos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" name="p10" id="p10" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 text-center">10.00</div>
                            </td>

                        </tr>
                        <tr>


                            <td class="px-6 py-4 whitespace-nowrap bg-gray-200 h-4">

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap bg-gray-200 h-4">

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap bg-gray-200 h-4">

                            </td>

                        </tr>

                        <!-- More items... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="m-6 align-middle inline-block sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="text-3xl text-black text-right">Billetes</div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-blue-500">
                            <tr>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Denominación
                                </th>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Cantidad
                                </th>
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Valor
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">Billete de 20</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="number" name="b20" id="b20" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">20.00</div>
                                </td>

                            </tr>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">Billete de 50</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="number" name="b50" id="b50" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">50.00</div>
                                </td>

                            </tr>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">Billete de 100</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="number" name="b100" id="b100" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">100.00</div>
                                </td>

                            </tr>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">Billete de 200</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="number" name="b200" id="b200" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">200.00</div>
                                </td>

                            </tr>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">Billete de 500</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="number" name="b500" id="b500" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">500.00</div>
                                </td>

                            </tr>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">Billete de 1,000</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="number" name="b1000" id="b1000" oninput="calcular()" class="w-24 h-7 text-center block sm:text-sm border-gray-300 ">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">1000.00</div>
                                </td>

                            </tr>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-200 h-4">

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap bg-gray-200 h-4">

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap bg-gray-200 h-4">

                                </td>

                            </tr>
                            <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <form action="#" wire:submit.prevent='save' method="POST">
        <div class="flex pt-14">
            <div class="grid grid-flow-row auto-rows-max md:auto-rows-min space-y-2 ">
                @if ($caja->status=='Abierta')
                <div class="bg-white w-56 h-20 sm:rounded-lg border-2 border-blue-400 ">
                    <h2 class="text-sm m-2 text-center font-extrabold">Monto apertura</h2>
                    <p class="text-sm m-2 text-center"><input wire:model='caja.monto_apertura' name="monto_apertura" autocomplete="off" id="monto_apertura" class="w-44 h-8 border-none text-center text-3xl font-extrabold" value="0" type="text" readonly></p>
                 
                </div><br>
                @else
                <div class="bg-white w-56 h-20 sm:rounded-lg border-2 border-blue-400 ">
                    <h2 class="text-sm m-2 text-center font-extrabold">Monto apertura</h2>
                    <p class="text-xs m-2 text-center"><input wire:model='caja.monto_apertura' autocomplete="off" id="monto_apertura" class="w-44 h-8 border-none text-center text-3xl font-extrabold" value="0" type="text"></p>
                    @error('caja.monto_apertura')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
                </div><br>
                @endif
                
                <div class="bg-white w-56 h-20 sm:rounded-lg border-2 border-red-400 ">
                    <h2 class="text-sm m-2 text-center font-extrabold">Monto cierre</h2>
                    <p class="text-sm m-2 text-center"><input wire:model='caja.monto_cierre' id="monto_cierre" class="w-44 h-8 border-none text-center text-3xl font-extrabold" value="0" type="text"></p>
                    @error('caja.monto_cierre')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
                </div><br>
                
                <div class="bg-white w-56 h-full sm:rounded-lg ">
                    <div class="pl-5">
                        <label for="caja" class="block text-lg font-medium pl-4 text-gray-700 pt-2 ">Seleccionar caja</label>
                        <select id="caja" wire:model='caja.caja' name="caja" class="mt-1 block w-44 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Seleccionar caja</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        @error('caja.caja')
              <p class="text-xs italic text-red-400">{{$message}}</p>
              @enderror
                    </div>
                    @if ($caja->status=='Abierta')
                    <div class="pl-20 pt-4 flex">

                        <button type="submit" class="flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md dark:bg-gray-800 hover:bg-red-500 dark:hover:bg-gray-700 focus:outline-none dark:focus:bg-gray-700">
                            <span class="mx-1"><a>Cerrar caja</a></span>
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button><br>
                    </div> <br>
                    @else
                    <div class="pl-20 pt-4 flex">

                        <button class="modal-open flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-700 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none dark:focus:bg-gray-700">
                            <span class="mx-1"><a>Abrir caja</a></span>
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button><br>
                    </div> <br>
                    @endif
                </div>
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
          <p class="text-2xl font-bold">¿Seguro que quieres abrir la caja?</p>
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
<div class="flex col-span-6 sm:col-span-3 lg:col-span-2 pl-6 float-left">
</div>


<script type="text/javascript">
    function calcular() {
        try {
            var c1 = parseFloat(document.getElementById("cen10").value) || 0,
                c2 = parseFloat(document.getElementById("cen20").value) || 0,
                c3 = parseFloat(document.getElementById("cen50").value) || 0,
                p1 = parseFloat(document.getElementById("p1").value) || 0,
                p2 = parseFloat(document.getElementById("p5").value) || 0
            p3 = parseFloat(document.getElementById("p10").value) || 0
            bill20 = parseFloat(document.getElementById("b20").value) || 0
            bill50 = parseFloat(document.getElementById("b50").value) || 0
            bill100 = parseFloat(document.getElementById("b100").value) || 0
            bill200 = parseFloat(document.getElementById("b200").value) || 0
            bill500 = parseFloat(document.getElementById("b500").value) || 0
            bill1000 = parseFloat(document.getElementById("b1000").value) || 0;


            document.getElementById("monto_cierre").value = c1 * 0.10 +
                c2 * 0.20 + c3 * 0.50 + p1 * 1 + p2 * 5 + p3 * 10 +
                bill20 * 20 + bill50 * 50 + bill100 * 100 + bill200 * 200 +
                bill500 * 500 + bill1000 * 1000;


        } catch (e) {

        }
    }
</script>
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
