@props([
    'cocktail'
])


<article class="max-w-80 bg-white rounded-lg">
    <a href="{{route('cocktail.show', $cocktail)}}" class="block">
        <figure>
            <img
                src="{{ $cocktail->image }}"
                class="rounded-tl-lg rounded-tr-lg max-w-80 aspect-square "
                loading="lazy"
                alt="{{ $cocktail->name }}">
        </figure>
        <section class="p-4">
            <div class="mb-4">
                <h2 class="text-xl text-blue-dianne font-bold">
                    {{ $cocktail->name }}
                </h2>
                <p class="text-gray-500 text-sm">
                    {{ $cocktail->category }}
                </p>
            </div>
            <div class="flex justify-between mb-4">
                <div class="flex items-center justify-center {{ $cocktail->alcoholic ? 'bg-sandy-brown' : 'bg-jungle-green/50' }} p-2 rounded-full">
                    <p class="text-white">
                        {{ $cocktail->alcoholic ? 'Alcoholic' : 'No alcoholic' }}
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-2xl text-gray-500 w-5" viewBox="0 0 14 14">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M2.679 3h8.642M7 8.5L1.659 1.702a.743.743 0 0 1-.159-.459v0c0-.41.333-.743.743-.743h9.514c.41 0 .743.333.743.743v0a.743.743 0 0 1-.159.46zm0 0v5m-3 0h6"/>
                    </svg>
                    <p class="text-gray-500">{{ $cocktail->glass }}</p>
                </div>
            </div>
            <p class="text-gray-500 text-sm">
                {{ $cocktail->instructions }}
            </p>
        </section>
    </a>
    <footer class="flex justify-end gap-4 px-4 pb-4">
        <form action="{{ route('cocktail.destroy', $cocktail) }}" method="POST">
            @csrf
            @method('DELETE')
            <x-danger-button type="submit">
                {{ __('Eliminar coctel') }}
            </x-danger-button>
        </form>

        <x-button>
            {{ __('Editar coctel') }}
        </x-button>
    </footer>
</article>
