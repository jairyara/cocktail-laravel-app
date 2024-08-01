<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-dianne leading-tight">
            {{ __('Todos los coctéles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-cocktail.card />
            </div>
        </div>
    </div>
</x-app-layout>
