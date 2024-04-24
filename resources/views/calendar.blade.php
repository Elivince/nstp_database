<x-app-layout>

    <!-- Sidebar -->
    <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex-shrink-0 flex flex-col antialiased justify-between">
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
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">All Rights Reserved</p>
        </div>
    </div>


    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <div class="overflow-hidden flex items-end justify-end dark:bg-gray-700">
        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
            <div class="container mx-auto px-20 py-20 md:py-24" style="max-width: 1000px;">
                <div class="font-bold dark:text-white text-xl mb-4">
                    Scheduled Tasks
                </div>

                <div class="dark:bg-gray-800 border-solid border border-gray-300 rounded-lg shadow overflow-hidden">
                    <div class="flex items-center justify-between py-2 px-6 ">
                        <div class="justify-center items-center">
                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold dark:text-white"></span>
                            <span x-text="year" class="ml-1 text-lg dark:text-white font-normal"></span>
                        </div>
                        <div class="border rounded-lg px-1" style="padding-top: 2px">
                            <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" :class="{'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <div class="border-r inline-flex h-6"></div>
                            <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" :class="{'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-1 -mb-1">
                        <div class="flex flex-wrap" style="margin-bottom: -40px">
                            <template x-for="(day, index) in DAYS" :key="index">
                                <div style="width: 14.26%" class="px-2 py-2">
                                    <div x-text="day" class=" dark:text-white text-sm uppercase tracking-wide font-bold text-center"></div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap border-t border-l">
                            <template x-for="blankday in blankdays">
                                <div style="width: 14.28%; height: 120px" class="text-center border-r border-b px-4 pt-2"></div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-r border-b relative">
                                    <div @click="showEventModal(date)" x-text="date" class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100" :class="{'bg-blue-500 text-white': isToday(date) == true, ' dark:text-white hover:text-gray-700 hover:bg-blue-200': isToday(date) == false }"></div>
                                    <div style="height: 80px" class="overflow-y-auto mt-1">
                                        <!-- <div class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none" x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length" x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                        <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                            <div @click="viewEventModal" class="px-2 py-1 rounded-lg mt-1 overflow-hidden border" :class="{
												'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
												'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
												'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
												'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
												'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
											}">
                                                <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div style="background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
                <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-24">
                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" x-on:click="openEventModal = !openEventModal">
                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                        </svg>
                    </div>

                    <form id="addEventToCalendar" action="/addEvent" method="POST">
                        <div class="shadow rounded-lg bg-white overflow-hidden w-full block p-8">
                            <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">
                                Add Event Details
                            </h2>

                            @csrf
                            <div class="mb-4">
                                <label for="event_title" class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event Details</label>
                                <input type="text" name="event_title" id="event_title" x-model="event_title" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" />
                            </div>

                            <div class="mb-4">
                                <label for="event_date" class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event Date</label>
                                <input type="text" name="event_date" id="event_date" x-model="event_date" readonly class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" />
                            </div>

                            <div class="inline-block w-64 mb-4">

                                <label for="event_theme" class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select a theme</label>
                                <div class="relative">
                                    <select id="event_theme" @change="event_theme = $event.target.value;" x-model="event_theme" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-blue-500 text-gray-700">
                                        <template x-for="(theme, index) in themes">
                                            <option :value="theme.value" x-text="theme.label"></option>
                                        </template>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg> -->
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 text-right">
                                <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
                                    Cancel
                                </button>
                                <button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="addEvent()">
                                    Save Event
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- /Modal -->

            <!-- View Modal -->
            <!-- <div style="background-color: rgba(0, 0, 0, 0.5)" class="fixed z-50 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="viewEventModal">
                <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-24">
                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" x-on:click="viewEventModal = !viewEventModal">
                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                        </svg>
                    </div>

                    <div class="shadow rounded-lg bg-white overflow-hidden w-full block p-8">
                        <h2 class="font-bold text-2xl mb-6 text-gray-800">
                            Event Details
                        </h2>

                        <div class="mb-4">
                            <label class="text-gray-800 block font-bold text-sm tracking-wide">Event Description</label>
                            <p class="text-gray-600 mt-2" x-text="event_title"></p>
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block font-bold text-sm tracking-wide">Event Date</label>
                            <p class="text-gray-600 mt-2" x-text="event_date"></p>
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block font-bold text-sm tracking-wide">Event Theme</label>
                            <p class="text-gray-600 mt-2" x-text="event_theme"></p>
                        </div>

                        <div class="mt-8 text-right">
                            <button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="editEvent()">
                                Edit Event
                            </button>
                        </div>

                    </div>
                </div>
            </div> -->
            <!-- /View Modal -->



            <script>
                const MONTH_NAMES = [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ];
                const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

                function app() {
                    return {
                        month: "",
                        year: "",
                        no_of_days: [],
                        blankdays: [],
                        days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],

                        events: [{
                                event_date: new Date(2020, 3, 1),
                                event_title: "April Fool's Day",
                                event_theme: "blue",
                            },

                            {
                                event_date: new Date(2020, 3, 10),
                                event_title: "Birthday",
                                event_theme: "red",
                            },

                            {
                                event_date: new Date(2020, 3, 16),
                                event_title: "Upcoming Event",
                                event_theme: "green",
                            },
                        ],
                        event_title: "",
                        event_date: "",
                        event_theme: "blue",

                        themes: [{
                                value: "blue",
                                label: "Blue Theme",
                            },
                            {
                                value: "red",
                                label: "Red Theme",
                            },
                            {
                                value: "yellow",
                                label: "Yellow Theme",
                            },
                            {
                                value: "green",
                                label: "Green Theme",
                            },
                            {
                                value: "purple",
                                label: "Purple Theme",
                            },
                        ],

                        openEventModal: false,

                        initDate() {
                            let today = new Date();
                            this.month = today.getMonth();
                            this.year = today.getFullYear();
                            this.datepickerValue = new Date(
                                this.year,
                                this.month,
                                today.getDate()
                            ).toDateString();
                        },

                        isToday(date) {
                            const today = new Date();
                            const d = new Date(this.year, this.month, date);

                            return today.toDateString() === d.toDateString() ? true : false;
                        },

                        showEventModal(date) {
                            // open the modal
                            this.openEventModal = true;
                            this.event_date = new Date(
                                this.year,
                                this.month,
                                date
                            ).toDateString();
                        },

                        addEvent() {
                            if (this.event_title == "") {
                                return;
                            }

                            this.events.push({
                                event_date: this.event_date,
                                event_title: this.event_title,
                                event_theme: this.event_theme,
                            });

                            console.log(this.events);

                            // clear the form data
                            this.event_title = "";
                            this.event_date = "";
                            this.event_theme = "blue";

                            //close the modal
                            this.openEventModal = false;
                        },

                        // editEvent() {
                        //     const index = this.events.findIndex(event => event.id === this.selectedEvent.id);
                        //     this.events[index].event_date = this.event_date;
                        //     this.events[index].event_title = this.event_title;
                        //     this.events[index].event_theme = this.event_theme;

                        //     console.log(this.events);

                        //     // clear the form data
                        //     this.event_title = "";
                        //     this.event_date = "";
                        //     this.event_theme = "blue";

                        //     //close the modal
                        //     this.viewEventModal = false;
                        // }

                        getNoOfDays() {
                            let daysInMonth = new Date(
                                this.year,
                                this.month + 1,
                                0
                            ).getDate();

                            // find where to start calendar day of week
                            let dayOfWeek = new Date(this.year, this.month).getDay();
                            let blankdaysArray = [];
                            for (var i = 1; i <= dayOfWeek; i++) {
                                blankdaysArray.push(i);
                            }

                            let daysArray = [];
                            for (var i = 1; i <= daysInMonth; i++) {
                                daysArray.push(i);
                            }

                            this.blankdays = blankdaysArray;
                            this.no_of_days = daysArray;
                        },
                    };
                }
            </script>
        </div>

</x-app-layout>