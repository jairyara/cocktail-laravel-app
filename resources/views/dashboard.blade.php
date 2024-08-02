<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-dianne leading-tight">
            {{ __('Todos los coctéles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" sm:rounded-lg grid grid-cols-1 justify-items-center md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach( $cocktails as $cocktail)
                    <x-cocktail.card :cocktail="$cocktail"/>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
