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
        <form id="addRecordForm" action="/addRequest" method="POST">
            @csrf
            <div class="mx-40 mt-6 text-gray-500  dark:text-gray-200 leading-tight">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-normal text-white">Name</label>
                        <input type="text" name="name" id="name" class="h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white shadow-sm sm:text-xs border-gray-300  dark:bg-gray-800 rounded-md text-sm">
                    </div>
                    <div>
                        <label for="component" class="block text-sm font-normal text-white">Component</label>
                        <input type="text" name="component" id="component" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block text-white  dark:bg-gray-800 w-full shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="campus" class="block text-sm font-normal text-white">Campus</label>
                        <input type="text" name="campus" id="campus" class="h-8 text-sm mt-1 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="course" class="block text-sm font-normal text-white">Course</label>
                        <input type="text" name="course" id="course" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full text-white  dark:bg-gray-800 shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="graduation_year" class="block text-sm font-normal text-white">Year Graduated</label>
                        <input type="text" name="graduation_year" id="graduation_year" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full  dark:bg-gray-800 text-white shadow-sm sm:text-xs border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="serial_no" class="block text-sm font-normal text-white">Serial Number</label>
                        <input type="text" name="serial_no" id="serialno" class="h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="remarks" class="block text-sm font-normal text-white">Status</label>
                        <div class="input-container h-8 text-sm mt-1 block w-full shadow-sm sm:text-sm  dark:bg-gray-800 text-white rounded-md">
                            <i class=" fa fa-key icon"></i>
                            <select class="input-field px-28 h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md" name="remarks">
                                <option value="" class="px-10 py-10 h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md" selected disabled>Select Status</option>
                                <option value="Approved" class="px-10 py-10 h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">Approved</option>
                                <option value="Pending" class="px-10 py-10 h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">Pending</option>
                                <option value="Expired" class="px-10 py-10 h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">Expired</option>
                                <option value="Denied" class="px-10 py-10 h-8 text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-xs  dark:bg-gray-800 text-white border-gray-300 rounded-md">Denied</option>
                            </select>
                        </div>
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
                        <h2 class="text-white text-lg mb-2">List of Serial Number Request</h2>
                    </div>
                    <!-- component -->
                    <div class="flex  dark:bg-gray-800 px-2 w-full max-w-[400px]">
                        <button type="submit" class="relative p-2">
                            <svg width="30px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </button>
                        <form action="/tracker" method="GET" class="w-full max-w-[300px] dark:bg-gray-800">
                            @csrf
                            <input name="search" value="{{ request()->get('search') }}" type="text" class="w-full  h-12 focus:ring-0 focus:border-0 focus:border-b-2  border-b-2 border-t-0 border-r-0 border-l-0 dark:bg-gray-800 flex bg-transparent pl-2 text-[#cccccc] text-sm outline-0" placeholder="Search" />
                        </form>
                    </div>
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">
                                    <button class="flex items-center gap-x-1 focus:outline-none">
                                        <span>@sortablelink('date', 'DATE ISSUED')</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>
                                <th class="px-3 py-3">Serial Number</th>
                                <th class="px-4 py-3">
                                    <button class="flex items-center gap-x-1 focus:outline-none">
                                        <span>@sortablelink('name', 'NAME')</span>
                                        <svg class=" h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>
                                <th class="px-2 py-3">
                                    <button class="flex items-center gap-x-1 focus:outline-none">
                                        <span> @sortablelink('name', 'COMPONENT')</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>
                                <th class="px-4 py-3">
                                    <button class="flex items-center gap-x-1 focus:outline-none">
                                        <span> @sortablelink('name', 'CAMPUS')</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>
                                <th class="px-5 py-3">
                                    <button class="flex items-center gap-x-1 focus:outline-none">
                                        <span>@sortablelink('name', 'COURSE')</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>

                                <th class="px-3 py-3">
                                    <button class="flex items-center gap-x-1">
                                        <span>@sortablelink('date', 'YEAR GRADUATED')</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">
                                    <button class="flex items-center gap-x-1 focus:outline-none">
                                        <span>@sortablelink('name', 'ISSUED BY')</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>
                                <th class="px-1 py-3">Actions</th>
                                <th class="px-0 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($requests as $request)
                            <!-- Add your data here -->
                            <tr class="text-sm bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-white dark:text-gray-400">
                                <td class="px-4 py-3 ">{{ $request->date }}</td>
                                <td class="px-4 py-3">{{ $request->serial_no }}</td>
                                <td class="px-4 py-3">{{ $request->name }}</td>
                                <td class="px-4 py-3">{{ $request->component }}</td>
                                <td class="px-4 py-3">{{ $request->campus }}</td>
                                <td class="px-4 py-3">{{ $request->course }}</td>
                                <td class="px-4 py-3">{{ $request->graduation_year }}</td>
                                <td class="px-4 py-3">{{ $request->remarks }}</td>
                                <td class="px-4 py-3">{{ $request->issued_by }}</td>
                                <td class="px-4 py-3">
                                    <button @click="open = true">Edit</button>
                                </td>
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

                <div x-show="open" style="background-color: rgba(0, 0, 0, 0.8)" class="fixed inset-0 overflow-y-auto z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
                    <div class="p-4 max-w-2xl mx-auto absolute left-0 right-0 overflow-hidden mt-10">
                        <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" @click="open = false">
                            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                            </svg>
                        </div>
                        <!-- <div class="shadow rounded-lg bg-white overflow-hidden w-full block p-8"> -->

                        <form action="/viewEditRequest/{{$request->request_id}}" method="POST" class="shadow rounded-lg bg-white overflow-hidden w-full block p-8">
                            @csrf
                            @method('PUT')
                            <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">
                                Edit Record
                            </h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="name">
                                        Name
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="name" name="name" type="text" placeholder="Name" value="{{$request->name}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="component">
                                        Component
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="component" name="component" type="text" placeholder="Component" value="{{$request->component}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="campus">
                                        Campus
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="campus" name="campus" type="text" placeholder="Campus" value="{{$request->campus}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="course">
                                        Course
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="course" name="course" type="text" placeholder="Course" value="{{$request->course}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="graduation_year">
                                        Year Graduated
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="graduation_year" name="graduation_year" type="text" placeholder="Year Graduated" value="{{$request->graduation_year}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="serial_no">
                                        Serial Number
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="serial_no" name="serial_no" type="text" placeholder="Serial Number" value="{{$request->serial_no}}">
                                </div>
                                <div>
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="remarks">
                                        Remarks
                                    </label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="remarks" name="remarks" type="text" placeholder="Remarks" value="{{$request->remarks}}">
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
            </div>
            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3"> Showing {{ $requests->firstItem() }} - {{ $requests->lastItem() }} of {{ $requests->total() }} </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <div class="flex justify-center mt-6">
                    {{ $requests->links() }}
                </div>
            </div>

        </div>

    </div>



    <script>
        class MyClass {
            constructor() {
                this.editRequest = false; // This should keep the modal closed by default
            }

            showEditRequest = () => {
                this.editRequest = true;
            }

            closeEditRequest = () => {
                this.editRequest = false;
            }
        }

        // Instantiate the class and bind it to the window object
        window.myClass = new MyClass();
    </script>
</x-app-layout>