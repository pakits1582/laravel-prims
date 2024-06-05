<x-layout>
    <div class="container px-6 mx-auto grid">
        <x-heading>Dashboard</x-heading>
        <x-forms.field>
            <x-forms.label for="name">Name</x-forms.label>
            <x-forms.input name="name" id="name" placeholder="John Doe"></x-forms.input>
            <x-forms.error name="name"></x-forms.error>
        </x-forms.field>

        <x-forms.field>
            <x-forms.label for="name">Name</x-forms.label>
            <x-forms.input name="name" id="name" placeholder="John Doe"></x-forms.input>
        </x-forms.field>
    </div>

    <div class="flex-1 p-4">
        <div class="flex justify-center items-center h-full">
            <!-- Centered form container -->
            <div class="w-full max-w-5xl p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h2 class="text-2xl font-semibold mb-6 text-center">Centered Form</h2>
                <form action="#" method="POST">
                    <x-forms.field>
                        <x-forms.label for="name">Name</x-forms.label>
                        <x-forms.input name="name" id="name" placeholder="John Doe"></x-forms.input>
                        <x-forms.error name="name"></x-forms.error>
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="name">Name</x-forms.label>
                        <x-forms.input name="name" id="name" placeholder="John Doe"></x-forms.input>
                    </x-forms.field>
                    <x-forms.field>
                        <x-forms.label for="name">Name</x-forms.label>
                        <x-forms.input name="name" id="name" placeholder="John Doe"></x-forms.input>
                        <x-forms.error name="name"></x-forms.error>
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="name">Name</x-forms.label>
                        <x-forms.input name="name" id="name" placeholder="John Doe"></x-forms.input>
                    </x-forms.field>
                    <x-forms.field>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign
                            In</button>
                    </x-forms.field>
                </form>
            </div>
        </div>
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
