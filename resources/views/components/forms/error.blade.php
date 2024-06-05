@props(['name'])

@error($name)
    <p class="text-xs text-red-500 font-semibold mt-1 dark:text-red-400">{{ $message }}</p>
@enderror
