<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-center dark:text-gray-200 leading-tight">
            {{ __('Serial Number Request Tracker') }}
        </h2>
        <li><a href="{{ url('viewAddRequest') }}" class="text-white hover:text-red-700">Add</a></li>
    </x-slot>

    <div class="flex">
        <div class="bg-gray-200 dark:bg-gray-900 w-1/4 p-6">
            <ul>
              <li><a href="{{ url('dashboard') }}" class="text-white hover:text-red-700">Button 1</a></li>
              <li><a href="{{ url('tracker') }}" class="text-white hover:text-red-700">Button 2</a></li>
            </ul>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date Issued</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Component</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Campus</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Course</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Year Graduated</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Serial Number</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Remarks</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Issued by</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                            <tr>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->date }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->name }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->component }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->campus }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->course }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->graduation_year }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->serial_no }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->remarks }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->issued_by }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600"><a href="/viewEditRequest/{{$request->request_id}}">Edit</a>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600"><form action="/deleteRequest/{{ $request->request_id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>