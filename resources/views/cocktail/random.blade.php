<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-dianne leading-tight">
            {{ __('Random cocktail') }}
        </h2>
    </x-slot>

    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="flex gap-2 flex-col items-center">
                <h3 class="text-2xl text-blue-dianne">
                    ¿Listo para una experiencia inesperada? Prueba un cóctel al azar ahora.
                </h3>
                <x-button id="random-cocktail-btn">
                    {{ __('Probemos') }}
                </x-button>
            </section>

            <section class="mt-4 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">

                </div>
            </section>

        </div>
    </section>

</x-app-layout>


<script>

    const randomCocktailBtn = document.getElementById('random-cocktail-btn');
    const getRandomCocktail = () => {
        fetch('https://www.thecocktaildb.com/api/json/v1/1/random.php')
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => console.error(error));
    }
    randomCocktailBtn.addEventListener('click', getRandomCocktail);


</script>

