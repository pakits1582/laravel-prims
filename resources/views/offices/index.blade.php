<x-layout :title="'List of Offices'">
    <div class="container px-6 pb-6 mx-auto grid">
        <!-- Heading and Add Button -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <x-heading class="mt-6 mb-1">List of Offices</x-heading>
                <p class="text-xs text-gray-600 dark:text-gray-400 italic">List of all offices saved in the database.</p>
            </div>
            <a href="{{ route('offices.create') }}" title="Create New Office"><x-forms.button-add>Add New
                    Office</x-forms.button-add></a>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center">No.</th>
                            <th class="px-4 py-3 text-center w-1/6">Code</th>
                            <th class="px-4 py-3 text-center w-2/5">Name</th>
                            <th class="px-4 py-3 text-center w-2/5">Head of Office</th>
                            <th class="px-4 py-3 text-center w-1/6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($offices ?? [] as $office)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-3 py-2 text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-3 py-2 text-sm">
                                    {{ $office->code }}
                                </td>
                                <td class="px-3 py-2 text-sm">
                                    {{ $office->name }}
                                </td>
                                <td class="px-3 py-2 text-sm">
                                    {{ $office->headname }}
                                </td>
                                <td class="px-3 py-2 text-center">
                                    <div class="flex justify-center items-center space-x-4 text-sm">
                                        <button
                                            class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button
                                            class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td colspan="5" class="px-3 py-2 text-center">No records to be displayed.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div
                    class="flex text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    @if ($offices instanceof \Illuminate\Pagination\AbstractPaginator)
                        {{ $offices->onEachSide(2)->links('vendor.pagination.tailwind') }}
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-layout>
