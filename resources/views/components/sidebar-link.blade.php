<li class="relative px-6 py-3" x-data="{ isMenuOpen: false }">
    <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        @click="isMenuOpen = !isMenuOpen" aria-haspopup="true">
        <span class="inline-flex items-center">
            {!! \App\Helpers\CustomHelper::menuCategoryIcon($link['category']) !!}

            <span class="ml-4">{{ $link['category'] }}</span>
        </span>
        <svg :class="{ 'rotate-180': isMenuOpen }" class="w-4 h-4 transform transition-transform duration-150"
            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <template x-if="isMenuOpen">
        <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
            aria-label="submenu">

            @forelse ($link['accesses'] as $access)
                <li class="transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="block px-2 py-1 w-full" href="/{{ $access['access'] }}">{{ $access['title'] }}</a>
                </li>
            @empty
                <li class="transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="block px-2 py-1 w-full" href="#">No Menu</a>
                </li>
            @endforelse
        </ul>
    </template>
</li>
