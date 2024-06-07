@props(['status' => 'error', 'message' => '', 'alertClass' => 'red'])

@if ($message)
    <div class="border border-{{ $alertClass }}-400 {{ $alertClass }} px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">{{ $status == 'success' ? 'Success!' : 'Error!' }}</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif
