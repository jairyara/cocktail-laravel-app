<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-dianne leading-tight">
            {{ __('Añadir coctel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden p-4 lg:p-0 overflow-x-scroll sm:rounded-lg">
                <table id="create-cocktails" class="table-cocktails">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cocktails as $cocktail)
                        <tr>
                            <td>{{ $cocktail['idDrink'] }}</td>
                            <td>{{ $cocktail['strDrink'] }}</td>
                            <td><img src="{{ $cocktail['strDrinkThumb'] }}" alt="{{ $cocktail['strDrink'] }}" loading="lazy" class="w-20 aspect-square"></td>
                            <td>{{ $cocktail['alcoholic'] === true ? 'Alcoholic' : 'No alcoholic' }}</td>
                            <td>
                                <form action="{{ route('cocktail.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idDrink" value="{{ $cocktail['idDrink'] }}">
                                    <button type="submit" class="bg-jungle-green text-white font-bold py-2 px-4 rounded">Crear</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>
        let table = new DataTable('#create-cocktails', {
            responsive: true
        });
    </script>

</x-app-layout>
