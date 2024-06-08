@props(['label' => null, 'name' => null])

<div {{ $attributes->merge(['class' => 'mt-3']) }}>
    @if ($label)
        <x-forms.label :$name :$label></x-forms.label>
    @endif
    <div class="mt-1">
        {{ $slot }}

        @if ($name)
            <x-forms.error :error="$errors->first($name)"></x-forms.error>
        @endif
    </div>
</div>
