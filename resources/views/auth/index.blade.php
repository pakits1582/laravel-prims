<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Left Side - Image -->
        <div class="hidden md:block w-1/2 bg-cover bg-center"
            style="background-image: url('{{ asset('images/prims.jpg') }}');">
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-12 bg-white">
            <div class="w-full max-w-md">
                @if (session('message'))
                    <x-forms.alert :status="session('status')" :message="session('message')" :alertClass="session('alert-class')" />
                @endif
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="idno" class="block text-sm font-medium text-gray-700">ID Number</label>
                        <input type="text" id="idno" name="idno" required autofocus
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none">
                        <x-forms.error name="idno"></x-forms.error>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none">
                        <x-forms.error name="password"></x-forms.error>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <a href="" class="text-sm text-indigo-600 hover:text-indigo-500">Forgot your
                            password?</a>
                    </div>
                    <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-bold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
                </form>
            </div>
            <div class="mt-10 text-sm text-gray-600">&copy; MIS Office | {{ config('app.name') }}</div>
        </div>
    </div>
</body>

</html>
