<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

        <div style="text-align: center;">
            <img src="images/nstp-logo.png" alt="Logo" width="200" height="80">
        </div>

        <div>
            <a href="/">
                <span style="font-size: 2.5rem; font-weight: bold; color: #D9D9D9">NSTP TRACKING SYSTEM</span>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-3 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="/saveUsername">
                @csrf
                <div class="mt-4">
                    <x-input-label for="username" :value="__('Username')" />
                    <x-text-input id="username" class="block mt-1  w-full" type="text" name="username" required />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button type="submit" class="ms-3">
                        Submit
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>