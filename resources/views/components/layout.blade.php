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
            $sidebarLinks = [
                [
                    'title' => 'General Settings',
                    'icon' =>
                        '<svg class="h-6 w-6 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />  <circle cx="12" cy="12" r="3" /></svg>',
                    'id' => 'GeneralSettings',
                    'accesses' => [
                        ['title' => 'Configurations', 'access' => 'configurations', 'id' => 'configuration'],
                        ['title' => 'Users', 'access' => 'users', 'id' => 'user'],
                        ['title' => 'Offices', 'access' => 'offices', 'id' => 'office'],
                        ['title' => 'Employees', 'access' => 'employees', 'id' => 'employee'],
                    ],
                ],
                [
                    'title' => 'Supply Management',
                    'icon' =>
                        '<svg class="h-6 w-6 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" /></svg>',
                    'id' => 'SupplyManagement',
                    'accesses' => [['title' => 'Suppliers', 'access' => 'suppliers', 'id' => 'supplier']],
                ],
                [
                    'title' => 'Purchasing',
                    'icon' =>
                        '<svg class="h-6 w-6 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
                    'id' => 'Purchasing',
                    'accesses' => [
                        ['title' => 'Requestions', 'access' => 'purchase_requisitions', 'id' => 'purchase_requisition'],
                    ],
                ],
                [
                    'title' => 'Inventory',
                    'icon' =>
                        '<svg class="h-6 w-6 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />  <line x1="12" y1="12" x2="20" y2="7.5" />  <line x1="12" y1="12" x2="12" y2="21" />  <line x1="12" y1="12" x2="4" y2="7.5" />  <line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>',
                    'id' => 'Inventory',
                    'accesses' => [['title' => 'Items', 'access' => 'items', 'id' => 'item']],
                ],
            ];
        @endphp
        <x-sidebar :links="$sidebarLinks" />
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
