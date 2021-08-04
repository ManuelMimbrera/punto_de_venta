<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <a href="http://127.0.0.1:8000/"><img src="../img/logo.png"></a>
        </x-slot>

        <x-jet-validation-errors class="mb-2" />
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 ">
        
    <div class="px-6 py-1">
        <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Bienvenido a WAINE!!</h3>

        <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Iniciar sesión o crear una cuenta</p>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>


       
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="w-full mt-4">
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Ingresar correo electrónico"/>
               
            </div>

            <div class="w-full mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Ingresar contraseña" />
               
            </div>
            <div class="flex items-center justify-between mt-10">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
                @endif

                <x-jet-button class="ml-4 bg-green-600 hover:bg-green-400">
                    {{ __('Iniciar sesión') }}
                </x-jet-button>
            </div><br>
        </form>
        
    </div>

    <div class="flex items-center justify-center py-4 text-center bg-gray-300 dark:bg-gray-700 ">
        
    </div>
</div>
      
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
