<x-app-layout>
    <div class="mt-0">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold text-white">NSTP Database</h1>
            <p class="text-white">Welcome to the NSTP Database</p>
        </div>

    </div>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <div x-cloak x-data="{open:false}" class="flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <!-- S.N Table -->
        <form id="addRecordForm" action="/addOutgoing" method="POST">
            @csrf
            <div class="mx-40 mt-6 text-gray-500  dark:text-gray-200 leading-tight">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="to_office" class="block text-sm font-normal text-white">To what Office</label>
                        <input type="text" name="to_office" id="to_office" class="h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white shadow-sm sm:text-xs border-gray-300  dark:bg-gray-800 rounded-md text-sm">
                    </div>
                    <div>
                        <label for="for" class="block text-sm font-normal text-white">For</label>
                        <input type="text" name="for" id="for" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block text-white  dark:bg-gray-800 w-full shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-normal text-white">Subject</label>
                        <input type="text" name="subject" id="subject" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="remarks" class="block text-sm font-normal text-white">Remarks</label>
                        <input type="text" name="remarks" id="remarks" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="action" class="block text-sm font-normal text-white">Action</label>
                        <input type="text" name="action" id="action" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  dark:bg-gray-800 text-white shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="action_date" class="block text-sm font-normal text-white">Date of Action</label>
                        <input type="text" name="action_date" id="action_date" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-6">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-normal text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Record
                </button>
            </div>
        </form>

        <div class="mt-16 mx-10 mb-16">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <div class="flex flex-col items-start">
                        <h2 class="text-white text-lg mb-2">List of Outgoing Communication</h2>
                    </div>
                    <!-- component -->
                    <div class="flex  dark:bg-gray-800 px-2 w-full max-w-[600px]">
                        <button class="self-center flex p-1 cursor-pointer bg-[#0d1829]"> <svg width="30px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.567 9.8895C12.2495 8.90124 12.114 7.5637 11.247 6.7325C10.3679 5.88806 9.02339 5.75928 7.99998 6.4215C7.57983 6.69308 7.25013 7.0837 7.05298 7.5435C6.85867 7.99881 6.80774 8.50252 6.90698 8.9875C7.00665 9.47472 7.25054 9.92071 7.60698 10.2675C7.97021 10.6186 8.42786 10.8563 8.92398 10.9515C9.42353 11.049 9.94062 11.0001 10.413 10.8105C10.8798 10.6237 11.2812 10.3033 11.567 9.8895Z" stroke="#ff5c5c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.433 17.8895C11.7504 16.9012 11.886 15.5637 12.753 14.7325C13.6321 13.8881 14.9766 13.7593 16 14.4215C16.4202 14.6931 16.7498 15.0837 16.947 15.5435C17.1413 15.9988 17.1922 16.5025 17.093 16.9875C16.9933 17.4747 16.7494 17.9207 16.393 18.2675C16.0298 18.6186 15.5721 18.8563 15.076 18.9515C14.5773 19.0481 14.0614 18.9988 13.59 18.8095C13.1222 18.6234 12.7197 18.3034 12.433 17.8895V17.8895Z" stroke="#ff5c5c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 7.75049C11.5858 7.75049 11.25 8.08627 11.25 8.50049C11.25 8.9147 11.5858 9.25049 12 9.25049V7.75049ZM19 9.25049C19.4142 9.25049 19.75 8.9147 19.75 8.50049C19.75 8.08627 19.4142 7.75049 19 7.75049V9.25049ZM6.857 9.25049C7.27121 9.25049 7.607 8.9147 7.607 8.50049C7.607 8.08627 7.27121 7.75049 6.857 7.75049V9.25049ZM5 7.75049C4.58579 7.75049 4.25 8.08627 4.25 8.50049C4.25 8.9147 4.58579 9.25049 5 9.25049V7.75049ZM12 17.2505C12.4142 17.2505 12.75 16.9147 12.75 16.5005C12.75 16.0863 12.4142 15.7505 12 15.7505V17.2505ZM5 15.7505C4.58579 15.7505 4.25 16.0863 4.25 16.5005C4.25 16.9147 4.58579 17.2505 5 17.2505V15.7505ZM17.143 15.7505C16.7288 15.7505 16.393 16.0863 16.393 16.5005C16.393 16.9147 16.7288 17.2505 17.143 17.2505V15.7505ZM19 17.2505C19.4142 17.2505 19.75 16.9147 19.75 16.5005C19.75 16.0863 19.4142 15.7505 19 15.7505V17.2505ZM12 9.25049H19V7.75049H12V9.25049ZM6.857 7.75049H5V9.25049H6.857V7.75049ZM12 15.7505H5V17.2505H12V15.7505ZM17.143 17.2505H19V15.7505H17.143V17.2505Z" fill="#ff5c5c" />
                                </g>

                            </svg></button>

                        <input type="text" class="w-full h-12  border-0 dark:bg-gray-800 flex bg-transparent pl-2 text-[#cccccc] text-sm outline-0" placeholder="Search name" />
                        <button type="submit" class="relative p-2">
                            <svg width="30px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>

                            </svg>
                        </button>
                    </div>
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Code Number</th>
                                <th class="px-4 py-3">To what Office</th>
                                <th class="px-2 py-3">For</th>
                                <th class="px-4 py-3">Subject</th>
                                <th class="px-5 py-3">Remarks</th>
                                <th class="px-3 py-3">Action</th>
                                <th class="px-3 py-3">Date of Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($outgoings as $outgoing)
                            <!-- Add your data here -->
                            <tr class="text-sm bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-white dark:text-gray-400">
                                <td class="px-4 py-3 ">{{ $outgoing->date }}</td>
                                <td class="px-4 py-3">{{ "NSTP-" . \Carbon\Carbon::parse($outgoing->date)->format('Y-m') . "-" . $outgoing->outgoing_no }}</td>
                                <td class="px-4 py-3">{{ $outgoing->to_office }}</td>
                                <td class="px-4 py-3">{{ $outgoing->for }}</td>
                                <td class="px-4 py-3">{{ $outgoing->subject }}</td>
                                <td class="px-4 py-3">{{ $outgoing->remarks }}</td>
                                <td class="px-4 py-3">{{ $outgoing->action }}</td>
                                <td class="px-4 py-3">{{ $outgoing->action_date }}</td>
                                <td class="px-4 py-3">
                                    <button @click="open = true">Edit</button>
                                </td>
                                <td class="px-4 py-3">
                                    <form action="/deleteOutgoing/{{ $outgoing->outgoing_no }}" method="POST">
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

                <div x-show="open" style="background-color: rgba(0, 0, 0, 0.8)" class="fixed inset-0 overflow-y-auto z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
                    <div class="p-4 max-w-2xl mx-auto absolute left-0 right-0 overflow-hidden mt-10">
                        <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" @click="open = false">
                            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                            </svg>
                        </div>
                        <!-- <div class="shadow rounded-lg bg-white overflow-hidden w-full block p-8"> -->

                        <form id="editRecordForm" action="/viewEditOutgoing/{{$outgoing->outgoing_no}}" method="POST" class="shadow rounded-lg bg-white overflow-hidden w-full block p-8">
                            @csrf
                            @method('PUT')
                            <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">
                                Edit Record
                            </h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        To what office
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="To what Office" name="to_office" value="{{$outgoing->to_office}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        For
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="For" name="for" value="{{$outgoing->for}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Subject
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Subject" name="subject" value="{{$outgoing->subject}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Remarks
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Remarks" name="remarks" value="{{$outgoing->remarks}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Action
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Action" name="action" value="{{$outgoing->action}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Action Date
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Date of Action" name="action_date" value="{{$outgoing->action_date}}">
                                </div>
                            </div>
                            <div class=" mt-8 text-right">
                                <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="open = false">
                                    Close
                                </button>
                                <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="open = false">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                        <!-- </div> -->
                    </div>
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