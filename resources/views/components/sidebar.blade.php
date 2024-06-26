<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            SLC-PRIMS
        </a>
        <ul class="mt-6">
            @forelse ($links ?? [] as $link)
                <x-sidebar-link :link="$link" />
            @empty
                <li>No user access</li>
            @endforelse
        </ul>
    </div>
</aside>
