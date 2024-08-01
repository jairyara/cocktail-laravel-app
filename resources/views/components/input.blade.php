@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-jungle-green focus:ring-jungle-green rounded-md shadow-sm']) !!}>
