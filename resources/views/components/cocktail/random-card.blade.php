<article class="flex flex-col md:flex-row bg-white border-2 border-blue-dianne rounded-lg">
    <figure>
        <img id="image"
            src=""
            class="rounded-tl-lg rounded-tr-lg md:rounded-tr-none md:rounded-bl-lg max-2-72 md:max-w-96 aspect-square "
            loading="lazy"
            alt="Cargando">
    </figure>

    <section class="p-6 max-h-96 overflow-y-auto w-full">
        <header class="flex items-center justify-between w-full">
            <div>
                <h2 id="title" class="text-2xl text-blue-dianne font-bold">
                    Cargando...
                </h2>
                <p id="category" class="text-gray-500">
                    Cargando...
                </p>
            </div>
            <div>
                <div id="alcoholic" class="flex items-center justify-center bg-sandy-brown p-2 rounded-full">
                    <p class="text-white">

                    </p>
                </div>
                <p id="glass" class="text-gray-500">Old fashioned glass</p>
            </div>
        </header>
        <section class="my-6">
            <h3 class="text-xl text-blue-dianne font-bold mb-2">
                Instrucciones
            </h3>
            <p id="ingredients">

            </p>
        </section>

        <footer class="flex justify-end">
            <form id="save-cocktail" action="/cocktail" method="POST">
                @csrf
                <input id="input-save" type="hidden" name="idDrink" value="">
                <x-button>
                    {{ __('Agregar a mis cocteles') }}
                </x-button>
            </form>

        </footer>
    </section>

</article>
