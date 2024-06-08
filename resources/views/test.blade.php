<x-layout :title="'Test Title'">


    <div class="flex-1 p-4">
        <div class="flex justify-center items-center h-full">
            <!-- Centered form container -->
            <div class="w-full max-w-5xl p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <x-heading>Centered Form</x-heading>
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

    <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Card Header -->
        <div class="px-6 py-4 bg-purple-600 text-white">
            <h2 class="text-lg font-semibold">Card Heading</h2>
        </div>
        <!-- Card Body -->
        <div class="p-6">
            <p class="text-gray-700 text-base">
                This is the body of the card. You can put any content here, such as text, images, or other HTML
                elements.
            </p>
        </div>
        <!-- Card Footer -->
        <div class="px-6 py-4 bg-gray-100 border-t border-gray-200 text-right">
            <button
                class="px-4 py-2 text-sm font-medium leading-5 text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Action
            </button>
        </div>
    </div>



    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray- dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
            acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>


    <div class="flex-1 p-4">
        <div class="flex justify-center items-center h-full">
            <!-- Centered form container -->
            <div class="w-full max-w-screen-md bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-6 text-center">Centered Form</h2>
                <form action="#" method="POST">
                    <!-- Two-column layout -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">First
                                Name</label>
                            <input type="text" id="first_name" name="first_name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                            <input type="text" id="last_name" name="last_name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                            <input type="text" id="phone" name="phone"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign
                            In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
