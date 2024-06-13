@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center w-full px-3">
        <div class="flex-grow">
            <span class="text-sm text-gray-500">
                Showing {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }} of {{ $paginator->total() }}
            </span>
        </div>
        <div class="flex justify-end">
            <!-- Pagination -->
            <ul class="inline-flex items-center">
                <!-- Previous Page Link -->
                @if ($paginator->onFirstPage())
                    <li class="mx-1">
                        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            disabled aria-label="Previous">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" />
                            </svg>
                        </button>
                    </li>
                @else
                    <li class="mx-1">
                        <a href="{{ $paginator->previousPageUrl() }}"
                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" />
                            </svg>
                        </a>
                    </li>
                @endif

                <!-- Pagination Elements -->
                @foreach ($elements as $element)
                    <!-- "Three Dots" Separator -->
                    @if (is_string($element))
                        <li class="mx-1"><span class="px-3 py-1">...</span></li>
                    @endif

                    <!-- Array of Links -->
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="mx-1"><span
                                        class="px-3 py-1 bg-purple-600 text-white rounded-md">{{ $page }}</span>
                                </li>
                            @else
                                <li class="mx-1"><a href="{{ $url }}"
                                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                <!-- Next Page Link -->
                @if ($paginator->hasMorePages())
                    <li class="mx-1">
                        <a href="{{ $paginator->nextPageUrl() }}"
                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                            </svg>
                        </a>
                    </li>
                @else
                    <li class="mx-1">
                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                            disabled aria-label="Next">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                            </svg>
                        </button>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif
