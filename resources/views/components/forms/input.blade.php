@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
    ];

    $defaultClass =
        'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input';

    // Merge provided class attributes dynamically
    $class = $attributes->get('class') ? $attributes->get('class') . ' ' . $defaultClass : $defaultClass;
    $mergedAttributes = $attributes->merge(['class' => $class]);

@endphp

<x-forms.field :label="$label" :name="$name">
    <input {{ $mergedAttributes->merge($defaults) }}>
</x-forms.field>
