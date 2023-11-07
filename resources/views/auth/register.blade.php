<x-principal.marco-general titulo="Registro">
    <div class="py-8 min-h-screen flex flex-col items-center justify-center dark:bg-neutral light:bg-base-100">
        <div class="flex flex-col dark:bg-gray-900 light:bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
            <div class="font-medium self-center text-xl sm:text-3xl dark:text-gray-300 light:text-gray-800">
                Regístrate y únete
            </div>
            <div class="mt-4 self-center text-xl sm:text-sm dark:text-gray-300 light:text-gray-800">
                Registra tus datos para obtener acceso a la cuenta
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex flex-col mb-5">
                    <label for="name" class="mb-1 text-xs tracking-wide dark:text-gray-300 light:text-gray-600">Nombre:</label>
                    <div class="relative">
                        <x-text-input id="name" class="text-sm placeholder-gray-500 dark:placeholder-gray-300 light:placeholder-gray-600 pl-10 pr-4 rounded-2xl border dark:border-gray-700 light:border-gray-400 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                </div>

                <!-- Resto del formulario con cambios similares para los estilos dependiendo del tema -->

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm dark:text-gray-400 light:text-gray-600 hover:text-gray-900 dark:hover:text-gray-100 light:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('¿Ya estás registrado?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>
            </form>

            <br>
            <x-principal.auth-github-button></x-principal.auth-github-button>
        </div>
    </div>
</x-principal.marco-general>
