<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-200 dark:bg-gray-900 w-1/4 p-6">
            <ul>
                <li><a href="{{ url('dashboard') }}" class="text-white hover:text-red-700">Button 1</a></li>
                <li><a href="{{ url('tracker') }}" class="text-white hover:text-red-700">Button 2</a></li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex flex-wrap -m-2">
            <!-- Main Content -->
            <div class="flex-1 p-6 w-full sm:w-1/2 md:w-1/3">
                <div class="flex flex-wrap -m-2">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 m-2 flex-auto">
                        <p class="text-gray-600 dark:text-gray-400">20</p>
                        <h2 class="text-xl font-normal text-gray-800 dark:text-gray-200">Serial Number Request</h2>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 m-2 flex-auto">
                        <h1 class="text-gray-600 dark:text-gray-400 text-4xl">20</h1>
                        <h2 class="text-xl font-normal text-gray-800 dark:text-gray-200">Incoming Communication</h2>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 m-2 flex-auto">
                        <h1 class="text-gray-600 dark:text-gray-400 text-4xl">20</h1>
                        <h2 class="text-xl font-normal text-gray-800 dark:text-gray-200">Outgoing Communication</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>