<x-principal.marco-general titulo="Login">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="py-8 min-h-screen flex flex-col items-center justify-center dark:bg-neutral light:bg-base-100">
        <div class="flex flex-col dark:bg-gray-900 light:bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
            <div class="font-medium self-center text-xl sm:text-3xl dark:text-gray-300 light:text-gray-800">
                Loguéate y únete
            </div>
            <div class="mt-4 self-center text-xl sm:text-sm dark:text-gray-300 light:text-gray-800">
                Ingresa tus credenciales para obtener acceso a la cuenta
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Resto del formulario con cambios similares para los estilos dependiendo del tema -->

                <div>
                    <x-input-label for="email" :value="__('Email')" class="dark:text-gray-300 light:text-gray-600" />
                    <x-text-input id="email" class="block mt-1 w-full dark:placeholder-gray-300 light:placeholder-gray-600" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" class="dark:text-gray-300 light:text-gray-600" />

                    <x-text-input id="password" class="block mt-1 w-full dark:placeholder-gray-300 light:placeholder-gray-600" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 light:bg-white border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm dark:text-gray-400 light:text-gray-600">{{ __('Recuérdame') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm dark:text-gray-400 light:text-gray-600 hover:text-gray-900 dark:hover:text-gray-100 light:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
            <br>
            <x-principal.auth-github-button></x-principal.auth-github-button>

        </div>
    </div>
</x-principal.marco-general>
