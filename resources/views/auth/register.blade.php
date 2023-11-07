<x-guest-layout titulo="Registro">
    <!-- Mantén los estilos del primer bloque -->

    <!-- Agrega el título de registro y el formulario -->
    <div class="py-8 min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
            <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
                Regístrate y únete
            </div>
            <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
                Registra tus datos para obtener acceso a la cuenta
            </div>

            <!-- Utiliza la lógica del segundo bloque para el formulario -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex flex-col mb-5">
                    <label for="name" class="mb-1 text-xs tracking-wide text-gray-600">Nombre:</label>
                    <div class="relative">
                        <!-- Mantén los estilos para el campo de nombre -->
                        <x-text-input id="name" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                </div>

                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-1 text-xs tracking-wide text-gray-600">Dirección de correo electrónico:</label>
                    <div class="relative">
                        <!-- Mantén los estilos para el campo de correo electrónico -->
                        <x-text-input id="email" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                </div>

                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Contraseña:</label>
                    <div class="relative">
                        <!-- Mantén los estilos para el campo de contraseña -->
                        <x-text-input id="password" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>

                <div class="flex flex-col mb-6">
                    <label for="password_confirmation" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Confirmar Contraseña:</label>
                    <div class="relative">
                        <!-- Mantén los estilos para el campo de confirmación de contraseña -->
                        <x-text-input id="password_confirmation" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('¿Ya estás registrado?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>
            </form>

            {{-- <div class="flex justify-center items-center mt-6">
                <a href="#" class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
                    <span class="ml-2">¿Ya tienes una cuenta? <a href="#" class="text-xs ml-2 text-blue-500 font-semibold">Inicia sesión aquí</a></span>
                </a>
            </div> --}}
        </div>
    </div>
</x-guest-layout>

