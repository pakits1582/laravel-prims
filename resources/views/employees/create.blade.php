<x-layout :title="'Create Employee'">
    <div class="flex-1 p-4">
        <div class="flex justify-center items-center h-full">
            <!-- Centered form container -->
            button
            <div class="w-full max-w-5xl p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <x-heading>Add New Employee</x-heading>
                <x-forms.form action="#" method="POST">

                    <x-forms.input label="Title" name="title" placeholder="CEO" />
                    <x-forms.input label="Title" name="title" placeholder="CEO" />


                    <x-forms.field class="flex justify-center items-center mt-5">
                        <x-forms.button>
                            Save Office
                            <svg viewBox="0 0 24 24" fill="currentColor" class="size-5 ml-2">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </x-forms.button>
                    </x-forms.field>

                </x-forms.form>
            </div>
        </div>
    </div>
</x-layout>
