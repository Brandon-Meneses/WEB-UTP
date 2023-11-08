<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis cursos') }}
        </h2>
    </x-slot>
    <div class="min-h-[60vh]">
        @include('carrusel')
        {{-- @foreach ($cursos as $curso)
          @foreach ($curso as $item)
              <p>
                  {{ $item->nombre }}
              </p>
          @endforeach
      @endforeach --}}
    </div>
    
</x-app-layout>
