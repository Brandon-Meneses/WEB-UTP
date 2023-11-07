<x-guest-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos por correo electrónico un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
            </div>
        
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Recuperar contraseña') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
