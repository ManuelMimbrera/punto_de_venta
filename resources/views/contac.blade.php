<x-guest-layout>
<title>
      
      </title>
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
      <!--Replace with your tailwind.css once created-->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
      <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
      <style>
        .gradient {
          background: linear-gradient(90deg, #16A085  0%, white  100%);
          
        }
      </style>
    
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
      <!--Nav-->
      <nav id="header" class=" bg-white fixed w-full z-30 top-0 text-white ">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
          <div class="pl-4 flex items-center">
            <a class="toggleColour text-white  hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
             
              <a href="http://127.0.0.1:8000/"> <img width="150" height="150" src="img/logo2.png" alt="avatar"></a>
            </a>
          </div>
          <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>
         
             
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" >
          
            <ul class="list-reset lg:flex justify-end flex-1 items-center ">
              <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ url('/') }}">Inicio</a>
          
              </li>
          
              <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#nosotros">Nosotros</a>
          
              </li>
              <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#equipo">Equipo</a>
          
              </li>
              <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ url('/Contacto') }}">Contacto</a>
          
              </li>
             
            </ul>
          </div>
        </div>
       
  
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
      </nav>
     
      <br><br><br>
        
      <section class="bg-white border-b py-8 bg-gray-200">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-black">
          Contáctanos
        </h1>
    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Ponerse en contacto</h2>
        <p class="mt-3 text-center text-gray-600 dark:text-gray-400">¿Tienes alguna duda? como te podemos ayudar!!</p>
        
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3">
            <a class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>

                <span class="mt-2 text-center">Universidad Tecnologica de Tecámac</span>
            </a>

            <a class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>

                <span class="mt-2">+1 526 654 8965</span>
            </a>

            <a class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>

                <span class="mt-2">waineficial@gmail.com</span>
            </a>
        </div>        
        <div class="mt-6 ">
            <div class="items-center -mx-2 md:flex">
                <div class="w-full mx-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Nombre completo</label>

                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="text">
                </div>

                <div class="w-full mx-2 mt-4 md:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Correo electronico</label>

                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="email">
                </div>
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Mensaje</label>

                <textarea class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button class="px-4 py-2 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Enviar</button>
            </div>
        </div>
    </section>
      </section>
      
  
      

      
      
 
      
      <!-- Change the colour #f8fafc to match the previous section colour -->
      <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
            <g class="wave" fill="#f8fafc">
              <path
                d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
              ></path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
              <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                  d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                  opacity="0.100000001"
                ></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
              </g>
            </g>
          </g>
        </g>
      </svg>
      <a name="contacto">
      <section class="container mx-auto text-center py-6 mb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
          Comunicate con nosotros
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
          Escríbenos para entender tus ideas
        </h3>
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Contactar
        </button>
      </section>
      </a>
      <!--Footer-->
      <footer class="bg-white">
        <div class="container mx-auto px-8">
          <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-1 mb-6 text-black">
            <a href="http://127.0.0.1:8000/"> <img width="150" height="150" src="img/logo.png" alt="avatar"></a>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6"></p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6"></p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6"></p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500"></a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6">Legal</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline text-gray-800 hover:text-blue-500">Terms</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="/Aviso-de-privacidad" class="no-underline  text-gray-800 hover:text-blue-500">Aviso de privacidad</a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6">Redes sociales</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline  text-gray-800 hover:text-blue-500">Facebook</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline  text-gray-800 hover:text-blue-500">Linkedin</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline  text-gray-800 hover:text-blue-500">Twitter</a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6">Compañia</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a  class="no-underline  text-gray-800 ">+1 526 654 8965</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a  class="no-underline  text-gray-800 ">waineficial@gmail.com</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <p class="text-center text-gray-200 gradient" style="font-family: 'Barlow Condensed', sans-serif;">© WAINE 2021 - Todos los derechos reservados</p>
      </footer>
      <!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    -->
      <script>
      
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");
  
        document.addEventListener("scroll", function () {
          /*Apply classes for slide in bar*/
          scrollpos = window.scrollY;
  
          if (scrollpos > 10) {
            
            navaction.classList.remove("bg-white");
            navaction.classList.add("bg--300");
            navaction.classList.remove("text-gray-800");
            navaction.classList.add("text-white");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
              toToggle[i].classList.add("text-gray-800");
              toToggle[i].classList.remove("text-white");
            }
            
            navcontent.classList.remove("bg-gray-100");
            navcontent.classList.add("bg-white");
          } else {
            
            navaction.classList.remove("gradient");
            navaction.classList.add("bg-white");
            navaction.classList.remove("text-white");
            navaction.classList.add("text-gray-800");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
              toToggle[i].classList.add("text-white");
              toToggle[i].classList.remove("text-gray-800");
            }
  
            
            navcontent.classList.remove("bg-white");
            navcontent.classList.add("bg-gray-100");
          }
        });
      </script>
      <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
  
        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");
  
        document.onclick = check;
        function check(e) {
          var target = (e && e.target) || (event && event.srcElement);
  
          //Nav Menu
          if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
              // click on the link
              if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
              } else {
                navMenuDiv.classList.add("hidden");
              }
            } else {
              // click both outside link and outside menu, hide menu
              navMenuDiv.classList.add("hidden");
            }
          }
        }
        function checkParent(t, elm) {
          while (t.parentNode) {
            if (t == elm) {
              return true;
            }
            t = t.parentNode;
          }
          return false;
        }
      </script>
    </body>
  </html>
</x-guest-layout>