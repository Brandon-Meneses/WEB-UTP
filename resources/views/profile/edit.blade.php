<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- si el usuario es admin se le muestra lo siguiente --}}
            @if (auth()->user()->is_admin)
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg "> 
                    <div class="max-w-xl">                

                        <form action="/admin/switch" method="POST" class="mt-6 space-y-6">
                            @csrf
                            @method('PATCH')

                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Switch de Admin') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Poporciona un email para alternar su cargo') }}
                            </p>
                            
                            <div class="mt-6 ">
                                <x-input-label for="email_crear_admin" value="{{ __('Email') }}" class="sr-only " />
                                <x-text-input class="max-w-full"
                                    id="email_crear_admin"
                                    name="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    placeholder="{{ __('Email') }}"
                                />
                                {{-- <x-input-error :messages="$errors->userDeletion->get('email')" class="mt-2" /> --}}
                            </div>

                            <div class="mt-6 ">
                                <x-danger-button class="">
                                    {{ __('Switch') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </div> 
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
