 <script>
     const setup = () => {
         const getTheme = () => {
             if (window.localStorage.getItem('dark')) {
                 return JSON.parse(window.localStorage.getItem('dark'))
             }
             return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
         }

         const setTheme = (value) => {
             window.localStorage.setItem('dark', value)
         }

         return {
             loading: true,
             isDark: getTheme(),
             toggleTheme() {
                 this.isDark = !this.isDark
                 setTheme(this.isDark)
             },
         }
     }
 </script>
 <x-app-layout>
     <div x-data="setup()" :class="{ 'dark': isDark }">
         <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

             <!-- Sidebar -->
             <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                 <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                     <ul class="flex flex-col py-4 space-y-1">
                         <li class="px-5 hidden md:block">
                             <div class="flex flex-row items-center h-8">
                                 <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                             </div>
                         </li>
                         <li>
                             <a href='dashboard' class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                 <span class="inline-flex justify-center items-center ml-4">
                                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                     </svg>
                                 </span>
                                 <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                             </a>
                         </li>
                         <li>
                             <a href='calendar' class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                 <span class="inline-flex justify-center items-center ml-4">
                                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                     </svg>
                                 </span>
                                 <span class="ml-2 text-sm tracking-wide truncate">Scheduled Tasks</span>
                                 <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                             </a>
                         </li>
                         <!-- <li>
                             <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                 <span class="inline-flex justify-center items-center ml-4">
                                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                     </svg>
                                 </span>
                                 <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                             </a>
                         </li> -->

                         <li class="px-5 hidden md:block">
                             <div class="flex flex-row items-center mt-5 h-8">
                                 <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                             </div>
                         </li>
                         <li>
                             <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                 <span class="inline-flex justify-center items-center ml-4">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                         <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                         <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                     </svg>

                                 </span>
                                 <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                             </a>
                         </li>
                         <li>
                             <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                 <span class="inline-flex justify-center items-center ml-4">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                         <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                     </svg>

                                 </span>
                                 <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                             </a>
                         </li>
                     </ul>
                     <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">All Rights Reserved
                         <span class="dark:text-gray-400">©</span> 2024 <br>
                         <span class="dark:text-gray-400">Developed by Ynah & Vince
                     </p>

                 </div>
             </div>

             <!-- Main Content -->
             <div class="mt-16 h-full ml-14 mb-10 md:ml-64">
                 <!-- Statistics Cards -->
                 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                     <a href="{{ route('tracker') }}" class="card-link">
                         <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between py-10 px-5 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                             <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                 <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                 </svg>
                             </div>
                             <div class="text-right">
                                 <p class="text-2xl">{{ $trackerCount }}</p>
                                 <p>S.N Request</p>
                             </div>
                         </div>
                     </a>
                     <a href="{{ route('incoming') }}" class="card-link">
                         <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between  py-10 px-5 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                             <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                 <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                 </svg>
                             </div>
                             <div class="text-right">
                                 <p class="text-2xl">{{ $incomingCount }}</p>
                                 <p>Incoming</p>
                             </div>
                         </div>
                     </a>
                     <a href="{{ route('outgoing') }}" class="card-link">
                         <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between  py-10 px-5 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                             <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                 <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                 </svg>
                             </div>
                             <div class="text-right">
                                 <p class="text-2xl">{{ $outgoingCount }}</p>
                                 <p>Outgoing</p>
                             </div>
                         </div>
                     </a>
                     <a href="{{ route('file-system') }}" class="card-link">
                         <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between  py-10 px-5 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                             <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                 <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                 </svg>
                             </div>
                             <div class="text-right">
                                 <p>Documents</p>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- ./Statistics Cards -->

                 <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

                     <!-- Incoming Communication -->
                     <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                         <div class="rounded-t mb-0 px-0 border-0">
                             <div class="flex flex-wrap items-center px-4 py-2">
                                 <div class="relative w-full max-w-full flex-grow flex-1">
                                     <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Incoming Communication</h3>
                                 </div>
                                 <a href="{{ route('incoming') }}">
                                    <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                        <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                                    </div>
                                </a>
                             </div>
                             <div class="block w-full overflow-x-auto">
                                 <table class="min-w-full dark:text-white text-left text-sm font-light">
                                     <thead class="border-b font-medium dark:text-white dark:border-neutral-500">
                                         <tr>
                                             <th scope="col" class="px-6 py-4">Date</th>
                                             <th scope="col" class="px-5 py-4">From what office</th>
                                             <th scope="col" class="px-6 py-4">Subject</th>
                                             <th scope="col" class="px-6 py-4">Remarks</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($incomings as $incoming)
                                         <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->date }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->from_office }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->subject }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->remarks }}</td>
                                         </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- ./Social Traffic -->

                     <!-- Outgoing Communication -->
                     <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                         <div class="rounded-t mb-0 px-0 border-0">
                             <div class="flex flex-wrap items-center px-4 py-2">
                                 <div class="relative w-full max-w-full flex-grow flex-1">
                                     <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Outgoing Communication</h3>
                                 </div>
                                 <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                    <a href="{{ route('outgoing') }}">
                                     <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                                    </a>
                                </div>
                             </div>
                             <div class="block w-full overflow-x-auto">
                                 <table class="min-w-full dark:text-white text-left text-sm font-light">
                                     <thead class="border-b font-medium dark:text-white dark:border-neutral-500">
                                         <tr>
                                            <th scope="col" class="px-6 py-4">Date</th>
                                            <th scope="col" class="px-6 py-4">To what office</th>
                                            <th scope="col" class="px-6 py-4">Subject</th>
                                            <th scope="col" class="px-6 py-4">Remarks</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($outgoings as $incoming)
                                        <tr class="border-b dark:border-neutral-500">
                                           <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->date }}</td>
                                           <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->to_office }}</td>
                                           <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->subject }}</td>
                                           <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $incoming->remarks }}</td>
                                        </tr>
                                        @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- ./Recent Activities -->
                 </div>


                 <!-- Task Summaries -->

                 <!-- ./Task Summaries -->

                 <!-- Contact Form -->
                 <div class="mt-8 mx-4">
                     <div class="grid grid-cols-1 md:grid-cols-2">
                         <div class="flex items-center justify-center">
                             <img src="images/nstp-logo.png" alt="Logo" width="300" height="200">
                         </div>

                         <div class="p-6 bg-transparent sm:rounded-lg">
                             <h1 class="text-4xl sm:text-5xl text-white dark:text-white font-extrabold tracking-tight">NSTP OFFICE</h1>
                             <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">CONTACT INFORMATION</p>

                             <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                 <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                 </svg>
                                 <div class="container">
                                     <div class="ml-4 text-md tracking-wide font-semibold w-80">3rd Floor, Student Union Center Building, Bicol University, Legazpi City</div>

                                 </div>
                             </div>

                             <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                 <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                 </svg>
                                 <div class="ml-4 text-md tracking-wide font-semibold w-40 "><a href="https://www.facebook.com/BicolUNSTPOffice">https://www.facebook.com/BicolUNSTPOffice</a></div>
                             </div>

                             <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                 <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                 </svg>
                                 <div class="ml-4 text-md tracking-wide font-semibold w-80">bu-nstp@bicol-u.edu.ph</div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <!-- ./Contact Form -->
             </div>
         </div>
     </div>
 </x-app-layout>