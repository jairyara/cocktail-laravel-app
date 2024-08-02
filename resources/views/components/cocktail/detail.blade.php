@props([
    'cocktail'
])'


<article class="flex bg-white rounded-lg">
    <figure>
        <img
            src="{{ $cocktail->image }}"
            class="rounded-tl-lg rounded-bl-lg max-w-96 aspect-square "
            loading="lazy"
            alt="{{ $cocktail->name }}">
    </figure>

    <section class="p-6 max-h-96 overflow-y-auto w-full">
        <header class="flex items-center justify-between w-full">
            <div>
                <h2 class="text-2xl text-blue-dianne font-bold">
                    {{ $cocktail->name }}
                </h2>
                <p class="text-gray-500">
                    {{ $cocktail->category }}
                </p>
            </div>
            <div>
                <div class="flex items-center justify-center {{ $cocktail->alcoholic ? 'bg-sandy-brown' : 'bg-jungle-green/50' }} p-2 rounded-full">
                    <p class="text-white">
                        {{ $cocktail->alcoholic ? 'Alcoholic' : 'No alcoholic' }}
                    </p>
                </div>
                <p class="text-gray-500">{{ $cocktail->glass }}</p>
            </div>
        </header>
        <section class="my-6">
            <h3 class="text-xl text-blue-dianne font-bold mb-2">
                Instrucciones
            </h3>
            <p>
                {{ $cocktail->instructions }}
            </p>
            <h3 class="mt-3 text-blue-dianne font-semibold">
                Ingredientes
            </h3>
            <ul class="list-disc flex flex-wrap list-inside mt-2">
                @for( $i = 1; $i <= 15; $i++ )
                    @if( $cocktail->{"ingredient$i"} )
                        <li class="w-1/2">
                            {{ $cocktail->{"ingredient$i"} }} - {{ $cocktail->{"measure$i"} }}
                        </li>
                    @endif
                @endfor
            </ul>
        </section>

        <footer class="flex gap-4 justify-end">
            <form action="{{ route('cocktail.destroy', $cocktail) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-danger-button type="submit">
                    {{ __('Eliminar') }}
                </x-danger-button>
            </form>
            <x-button>
                {{ __('Editar') }}
            </x-button>
        </footer>
    </section>

</article>
