@props([
    'cocktail'
])

<form class="flex flex-wrap md:grid md:grid-cols-2 gap-4" action="{{ route('cocktail.update', $cocktail) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="w-full">
        <x-label for="name" value="{{ __('Nombre') }}"/>
        <x-input id="name" class="block mt-1 w-full"
                 type="text" name="name" :value="$cocktail->name" required
                 autofocus />
    </div>

    <div class="w-full">
        <x-label for="category" value="{{ __('Categoría') }}"/>
        <x-input id="category" class="block mt-1 w-full"
                 type="text" name="category" :value="$cocktail->category" required/>
    </div>

    <div class="w-full">
        <x-label for="glass" value="{{ __('Tipo de vaso') }}"/>
        <x-input id="glass" class="block mt-1 w-full"
                 type="text" name="glass" :value="$cocktail->glass" required/>
    </div>

    <div class="w-full">
        <x-label for="instructions" value="{{ __('Contiene alcohol') }}"/>
        <x-input id="instructions" class="block mt-1 w-full"
                 type="text" name="instructions" :value="$cocktail->instructions" required/>
    </div>

    <div class="w-full">
        <x-label for="image" value="{{ __('Imagen') }}"/>
        <x-input id="image" class="block mt-1 w-full"
                 type="text" name="image" :value="$cocktail->image" required/>
    </div>

    <div class="w-full">
        <x-label for="ingredient1" value="{{ __('Ingrediente 1') }}"/>
        <x-input id="ingredient1" class="block mt-1 w-full"
                 type="text" name="ingredient1" :value="$cocktail->ingredient1" />
    </div>

    <div class="w-full">
        <x-label for="ingredient2" value="{{ __('Ingrediente 2') }}"/>
        <x-input id="ingredient2" class="block mt-1
        w-full" type="text" name="ingredient2" :value="$cocktail->ingredient2" />
    </div>

    <div class="w-full">
        <x-label for="ingredient3" value="{{ __('Ingrediente 3') }}"/>
        <x-input id="ingredient3" class="block mt-1
        w-full" type="text" name="ingredient3" :value="$cocktail->ingredient3" />
    </div>

    <div class="w-full">
        <x-label for="ingredient4" value="{{ __('Ingrediente 4') }}"/>
        <x-input id="ingredient4" class="block mt-1
        w-full" type="text" name="ingredient4" :value="$cocktail->ingredient4" />
    </div>

    <div class="w-full">
        <x-label for="ingredient5" value="{{ __('Ingrediente 5') }}"/>
        <x-input id="ingredient5" class="block mt-1
        w-full" type="text" name="ingredient5" :value="$cocktail->ingredient5" />
    </div>

    <div class="w-full">
        <x-label for="ingredient6" value="{{ __('Ingrediente 6') }}"/>
        <x-input id="ingredient6" class="block mt-1
        w-full" type="text" name="ingredient6" :value="$cocktail->ingredient6" />
    </div>

    <div class="w-full">
        <x-label for="ingredient7" value="{{ __('Ingrediente 7') }}"/>
        <x-input id="ingredient7" class="block mt-1
        w-full" type="text" name="ingredient7" :value="$cocktail->ingredient7"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient8" value="{{ __('Ingrediente 8') }}"/>
        <x-input id="ingredient8" class="block mt-1
        w-full" type="text" name="ingredient8" :value="$cocktail->ingredient8"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient9" value="{{ __('Ingrediente 9') }}"/>
        <x-input id="ingredient9" class="block mt-1
        w-full" type="text" name="ingredient9" :value="$cocktail->ingredient9"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient10" value="{{ __('Ingrediente 10') }}"/>
        <x-input id="ingredient10" class="block mt-1
        w-full" type="text" name="ingredient10" :value="$cocktail->ingredient10"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient11" value="{{ __('Ingrediente 11') }}"/>
        <x-input id="ingredient11" class="block mt-1
        w-full" type="text" name="ingredient11" :value="$cocktail->ingredient11"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient12" value="{{ __('Ingrediente 12') }}"/>
        <x-input id="ingredient12" class="block mt-1
        w-full" type="text" name="ingredient12" :value="$cocktail->ingredient12"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient13" value="{{ __('Ingrediente 13') }}"/>
        <x-input id="ingredient13" class="block mt-1
        w-full" type="text" name="ingredient13" :value="$cocktail->ingredient13"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient14" value="{{ __('Ingrediente 14') }}"/>
        <x-input id="ingredient14" class="block mt-1
        w-full" type="text" name="ingredient14" :value="$cocktail->ingredient14"/>
    </div>

    <div class="w-full">
        <x-label for="ingredient15" value="{{ __('Ingrediente 15') }}"/>
        <x-input id="ingredient15" class="block mt-1
        w-full" type="text" name="ingredient15" :value="$cocktail->ingredient15"/>
    </div>

    <div class="w-full">
        <x-label for="measure1" value="{{ __('Medida 1') }}"/>
        <x-input id="measure1" class="block mt-1 w-full"
                 type="text" name="measure1" :value="$cocktail->measure1"/>
    </div>

    <div class="w-full">
        <x-label for="measure2" value="{{ __('Medida 2') }}"/>
        <x-input id="measure2" class="block mt-1 w-full"
                 type="text" name="measure2" :value="$cocktail->measure2"/>
    </div>

    <div class="w-full">
        <x-label for="measure3" value="{{ __('Medida 3') }}"/>
        <x-input id="measure3" class="block mt-1 w-full"
                 type="text" name="measure3" :value="$cocktail->measure3"/>
    </div>

    <div class="w-full">
        <x-label for="measure4" value="{{ __('Medida 4') }}"/>
        <x-input id="measure4" class="block mt-1 w-full"
                 type="text" name="measure4" :value="$cocktail->measure4"/>
    </div>

    <div class="w-full">
        <x-label for="measure5" value="{{ __('Medida 5') }}"/>
        <x-input id="measure5" class="block mt-1 w-full"
                 type="text" name="measure5" :value="$cocktail->measure5"/>
    </div>

    <div class="w-full">
        <x-label for="measure6" value="{{ __('Medida 6') }}"/>
        <x-input id="measure6" class="block mt-1 w-full"
                 type="text" name="measure6" :value="$cocktail->measure6"/>
    </div>

    <div class="w-full">
        <x-label for="measure7" value="{{ __('Medida 7') }}"/>
        <x-input id="measure7" class="block mt-1 w-full"
                 type="text" name="measure7" :value="$cocktail->measure7"/>
    </div>

    <div class="w-full">
        <x-label for="measure8" value="{{ __('Medida 8') }}"/>
        <x-input id="measure8" class="block mt-1 w-full"
                 type="text" name="measure8" :value="$cocktail->measure8"/>
    </div>

    <div class="w-full">
        <x-label for="measure9" value="{{ __('Medida 9') }}"/>
        <x-input id="measure9" class="block mt-1 w-full"
                 type="text" name="measure9" :value="$cocktail->measure9"/>
    </div>

    <div class="w-full">
        <x-label for="measure10" value="{{ __('Medida 10') }}"/>
        <x-input id="measure10" class="block mt-1 w-full"
                 type="text" name="measure10" :value="$cocktail->measure10"/>
    </div>

    <div class="w-full">
        <x-label for="measure11" value="{{ __('Medida 11') }}"/>
        <x-input id="measure11" class="block mt-1 w-full"
                 type="text" name="measure11" :value="$cocktail->measure11"/>
    </div>

    <div class="w-full">
        <x-label for="measure12" value="{{ __('Medida 12') }}"/>
        <x-input id="measure12" class="block mt-1 w-full"
                 type="text" name="measure12" :value="$cocktail->measure12"/>
    </div>

    <div class="w-full">
        <x-label for="measure13" value="{{ __('Medida 13') }}"/>
        <x-input id="measure13" class="block mt-1 w-full"
                 type="text" name="measure13" :value="$cocktail->measure13"/>
    </div>

    <div class="w-full">
        <x-label for="measure14" value="{{ __('Medida 14') }}"/>
        <x-input id="measure14" class="block mt-1 w-full"
                 type="text" name="measure14" :value="$cocktail->measure14"/>
    </div>

    <div class="w-full">
        <x-label for="measure15" value="{{ __('Medida 15') }}"/>
        <x-input id="measure15" class="block mt-1 w-full"
                 type="text" name="measure15" :value="$cocktail->measure15"/>
    </div>

    <div class="col-span-2 flex justify-center">
        <x-button type="submit">
            {{ __('Guardar') }}
        </x-button>
    </div>

</form>
