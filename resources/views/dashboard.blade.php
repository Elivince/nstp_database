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
        <div class="flex-1 mx-auto text-center bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</x-app-layout>