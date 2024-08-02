<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-dianne leading-tight">
            {{ __('Random cocktail') }}
        </h2>
    </x-slot>

    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="p-4 lg:p-0 flex gap-4 flex-col items-center">
                <h3 class="text-2xl text-blue-dianne text-center ">
                    ¿Listo para una experiencia inesperada? Prueba un cóctel al azar ahora.
                </h3>
                <x-button id="random-cocktail-btn">
                    {{ __('Probemos') }}
                </x-button>
            </section>

            <section id="container-random" class="mt-4 overflow-hidden hidden">
                <div class="grid grid-cols-1 gap-4 p-4">
                    <x-cocktail.random-card />
                </div>
            </section>

        </div>
    </section>

</x-app-layout>


<script>

    $(document).ready(function() {
        $('#random-cocktail-btn').click(function() {
            $.ajax({
                url: 'https://www.thecocktaildb.com/api/json/v1/1/random.php',
                type: 'GET',
                success: function(data) {
                    let image = $('#image');
                    let name = $('#title');
                    let category = $('#category');
                    let alcoholic = $('#alcoholic');
                    let glass = $('#glass');
                    let instructions = $('#ingredients');
                    let save = $('#save-cocktail');
                    let input_save = $('#input-save');

                    image.attr('src', data.drinks[0].strDrinkThumb);
                    image.attr('alt', data.drinks[0].strDrink);
                    name.text(data.drinks[0].strDrink);
                    category.text(data.drinks[0].strCategory);
                    alcoholic.text(data.drinks[0].strAlcoholic);
                    glass.text(data.drinks[0].strGlass);
                    instructions.text(data.drinks[0].strInstructions);
                    let container_random = $('#container-random');
                    container_random.removeClass('hidden');

                    if(data.drinks[0].strAlcoholic === 'Alcoholic') {
                        alcoholic.addClass('bg-sandy-brown');
                        alcoholic.removeClass('bg-jungle-green/50');
                    } else {
                        alcoholic.addClass('bg-jungle-green/50');
                        alcoholic.removeClass('bg-sandy-brown');
                    }

                    input_save.val(data.drinks[0].idDrink);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });

</script>

