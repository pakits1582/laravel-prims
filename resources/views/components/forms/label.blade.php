@props(['name', 'label'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium']) }} for="{{ $name }}">
    <span class="text-gray-700 dark:text-gray-400">{{ $label }}</span>
</label>
