@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-blue-dianne']) }}>
    {{ $value ?? $slot }}
</label>
