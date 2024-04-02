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
        <form id="addRecordForm" action="/addIncoming" method="POST">
            @csrf
            <div class="mx-40 mt-6 text-gray-500  dark:text-gray-200 leading-tight">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="from_office" class="block text-sm font-normal text-white">From what office</label>
                        <input type="text" name="from_office" id="from_office" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-normal text-white">Subject</label>
                        <input type="text" name="subject" id="subject" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="remarks" class="block text-sm font-normal text-white">Remarks</label>
                        <input type="text" name="remarks" id="remarks" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  dark:bg-gray-800 text-white shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="action" class="block text-sm font-normal text-white">Action</label>
                        <input type="text" name="action" id="action" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">
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
                        <h2 class="text-white text-lg mb-2">List of Incoming Communication</h2>
                    </div>
                    <!-- component -->
                    <div class="flex  dark:bg-gray-800 px-2 w-full max-w-[600px]">
                        <button type="submit" class="relative p-2">
                            <svg width="30px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </button>
                        <form action="/incoming" method="GET" class="w-full max-w-[300px] dark:bg-gray-800">
                            @csrf
                            <input name="search" value="{{ request()->get('search') }}" type="text" class="w-full  h-12 focus:ring-0 focus:border-0 focus:border-b-2  border-b-2 border-t-0 border-r-0 border-l-0 dark:bg-gray-800 flex bg-transparent pl-2 text-[#cccccc] text-sm outline-0" placeholder="Search" />
                        </form>
                    </div>
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Code number</th>
                                <th class="px-2 py-3">Received by</th>
                                <th class="px-4 py-3">From what office</th>
                                <th class="px-5 py-3">Subject</th>
                                <th class="px-3 py-3">Remarks</th>
                                <th class="px-3 py-3">Action</th>
                                <th class="px-4 py-3">Date of Action</th>
                                <th class="px-4 py-3">Received_by</th>
                                <th class="px-2 py-3">Actions</th>
                                <th class="px-0 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($incomings as $incoming)
                            <!-- Add your data here -->
                            <tr class="text-sm bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-white dark:text-gray-400">
                                <td class="px-4 py-3">{{ $incoming->date }}</td>
                                <td class="px-4 py-3">{{ "NSTP-" . \Carbon\Carbon::parse($incoming->date)->format('Y-m') . "-" . $incoming->incoming_no }}</td>
                                <td class="px-4 py-3">{{ $incoming->received_by }}</td>
                                <td class="px-4 py-3">{{ $incoming->from_office }}</td>
                                <td class="px-4 py-3">{{ $incoming->subject }}</td>
                                <td class="px-4 py-3">{{ $incoming->remarks }}</td>
                                <td class="px-4 py-3">{{ $incoming->action }}</td>
                                <td class="px-4 py-3">{{ $incoming->action_date }}</td>
                                <td class="px-4 py-3">{{ $incoming->action_recieved_by }}</td>
                                <td class="px-2 py-3">
                                    <button @click="open = true">Edit</button>
                                </td>
                                <td class="px-2 py-3">
                                    <form action="/deleteIncoming/{{ $incoming->incoming_no }}" method="POST">
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


                <!-- Modal -->
                <div x-show="open" style="background-color: rgba(0, 0, 0, 0.8)" class="fixed inset-0 overflow-y-auto z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
                    <div class="p-4 max-w-2xl mx-auto absolute left-0 right-0 overflow-hidden mt-10">
                        <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" @click="open = false">
                            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                            </svg>
                        </div>
                        <!-- <div class="shadow rounded-lg bg-white overflow-hidden w-full block p-8"> -->

                        <form id="editRecordForm" action="/viewEditIncoming/{{$incoming->incoming_no}}" method="POST" class="shadow rounded-lg bg-white overflow-hidden w-full block p-8">
                            @csrf
                            @method('PUT')
                            <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">
                                Edit Record
                            </h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        From what office
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="from_office" type="text" placeholder="From what office" value="{{$incoming->from_office}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Subject
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Subject" name="subject" value="{{$incoming->subject}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Remarks
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Remarks" name="remarks" value="{{$incoming->remarks}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Action
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Action" name="action" value="{{$incoming->action}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Action Date
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Action_date" name="action_date" value="{{$incoming->action_date}}">
                                </div>
                            </div>
                            <div class="mt-8 text-right">
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
                    <span class="flex items-center col-span-3"> Showing {{ $incomings->firstItem() }} - {{ $incomings->lastItem() }} of {{ $incomings->total() }} </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <div class="flex justify-center mt-6">
                        {{ $incomings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>