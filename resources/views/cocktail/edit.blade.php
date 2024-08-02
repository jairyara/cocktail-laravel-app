<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-dianne leading-tight">
            Editar {{ $cocktail->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg w-full p-4 md:p-0">
                <x-cocktail.edit-form :cocktail="$cocktail" />
            </div>
        </div>
    </div>

</x-app-layout>
