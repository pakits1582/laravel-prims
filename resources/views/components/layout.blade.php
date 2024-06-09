<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Default Title' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/css/tailwind.output.css'])
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
</head>

<body>
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @php
            $userAccesses = \App\Helpers\CustomHelper::userAccessCategories(Auth::user()->accesses->toArray());
        @endphp
        <x-sidebar :links="$userAccesses" />
        <div class="flex flex-col flex-1 w-full">
            <x-nav-top />
            <main class="h-full overflow-y-auto">
                {{ $slot }}
            </main>
        </div>
        <x-modal-logout />
    </div>
    @vite(['resources/js/app.js'])
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</body>

</html>
