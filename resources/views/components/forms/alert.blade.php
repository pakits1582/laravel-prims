@props(['status' => 'error', 'message' => '', 'alertClass' => 'red'])

@if ($message)
    <div class="p-4 mb-4 text-sm text-{{ $alertClass }}-800 rounded-lg bg-{{ $alertClass }}-50 dark:bg-gray-800 dark:text-{{ $alertClass }}-400"
        role="alert">
        <strong class="font-bold">{{ $status == 'success' ? 'Success!' : 'Error!' }}</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif
