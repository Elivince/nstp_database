<x-app-layout>
    <div class="mt-0">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold text-white">NSTP Database</h1>
            <p class="text-white">Welcome to the NSTP Database</p>
        </div>

    </div>
    <div class="flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <!-- S.N Table -->
        <form id="addRecordForm" action="/addRequest" method="POST">
            @csrf
            <div class="mt-4 mx-4 text-gray-500  dark:text-gray-200 leading-tight">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-white">Name</label>
                        <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white shadow-sm sm:text-sm border-gray-300  dark:bg-gray-800 rounded-md">
                    </div>
                    <div>
                        <label for="component" class="block text-sm font-medium text-white">Component</label>
                        <input type="text" name="component" id="component" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block text-white  dark:bg-gray-800 w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="campus" class="block text-sm font-medium text-white">Campus</label>
                        <input type="text" name="campus" id="campus" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="course" class="block text-sm font-medium text-white">Course</label>
                        <input type="text" name="course" id="course" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="graduation_year" class="block text-sm font-medium text-white">Year Graduated</label>
                        <input type="text" name="graduation_year" id="graduation_year" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  dark:bg-gray-800 text-white shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="serialno" class="block text-sm font-medium text-white">Serial Number</label>
                        <input type="text" name="serialno" id="serialno" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  dark:bg-gray-800 text-white border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="remarks" class="block text-sm font-medium text-white">Status</label>
                        <div class="input-container mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  dark:bg-gray-800 text-white border-gray-300 rounded-md">
                            <i class=" fa fa-key icon"></i>
                            <select class="input-field" name="remarks">
                                <option value="approved" class="text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">Approved</option>
                                <option value="pending" class="text-yellow-700 bg-yellow-100">Pending</option>
                                <option value="expired" class="text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-100">Expired</option>
                                <option value="denied" class="text-red-700 bg-red-100 dark:bg-red-700 dark:text-red-100">Denied</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="issued_by" class="block text-sm font-medium text-white">Issued By</label>
                        <input type="text" name="issued_by" id="issued_by" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  dark:bg-gray-800 text-white border-gray-300 rounded-md">
                    </div>


                </div>
            </div>
            <div class="mt-4 mx-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Request
                </button>
            </div>
        </form>


        <div class="mt-16 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Date Issued</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Component</th>
                                <th class="px-4 py-3">Campus</th>
                                <th class="px-4 py-3">Course</th>
                                <th class="px-4 py-3">Year Graduated</th>
                                <th class="px-4 py-3">Serial Number</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Issued By</th>
                                <th class="px-4 py-3">Actions</th>
                                <th class="px-4 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($requests as $request)
                            <!-- Add your data here -->
                            <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-white dark:text-gray-400">
                                <td class="px-4 py-3 ">{{ $request->date }}</td>
                                <td class="px-4 py-3">{{ $request->name }}</td>
                                <td class="px-4 py-3">{{ $request->component }}</td>
                                <td class="px-4 py-3">{{ $request->campus }}</td>
                                <td class="px-4 py-3">{{ $request->course }}</td>
                                <td class="px-4 py-3">{{ $request->graduation_year }}</td>
                                <td class="px-4 py-3">{{ $request->serialno }}</td>
                                <td class="px-4 py-3">{{ $request->remarks }}</td>
                                <td class="px-4 py-3">{{ $request->issued_by }}</td>
                                <td class="px-4 py-3"><a href="#">Edit</a>
                                <td class="px-4 py-3">
                                    <form action="/deleteRequest/{{ $request->request_id }}" method="POST">
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
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                            <ul class="inline-flex items-center">
                                <li>
                                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                </li>
                                <li>
                                    <span class="px-3 py-1">...</span>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>