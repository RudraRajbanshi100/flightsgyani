    @extends('frontend.layouts.app')
    @section('content')
        <!-- Hero Slider / Banner   -->
        <div class="slider banner-slider relative hidden md:block">
            <div>
                <a href="">
                    <img class="object-cover w-full h-60 md:h-[611px]"
                        src="https://images.pexels.com/photos/358319/pexels-photo-358319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="" />
                </a>
            </div>
            <div>
                <a href="">
                    <img class="object-cover w-full h-60 md:h-[611px]"
                        src="https://images.pexels.com/photos/3656072/pexels-photo-3656072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="" />
                </a>
            </div>
        </div>
        <!-- / Hero Slider / Banner   -->

        <!-- Search Box  -->
        <div class="search-box -mt-[10%]">
            <div class="search-inner-wrap">
                <h2 class="text-3xl font-medium text-primary text-center">
                    Book Your Flights
                </h2>

                <div class="sf-card relative sf-card-default z-20 drop-shadow-md w-full rounded-lg py-4">
                    <!-- Flight Type Navigation Tab  -->
                    <div class="flex justify-start">
                        <div class="flex ms-8 hover:bg-gray-200 bg-gray-200 rounded-lg transition p-1">
                            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                <button type="button"
                                    class="hs-tab-active:bg-white hs-tab-active:text-primary py-2 px-5 inline-flex items-center gap-x-2 bg-transparent text-sm text-black hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-primary disabled:opacity-50 disabled:pointer-events-none active"
                                    id="international-item-tab" aria-selected="true" data-hs-tab="#international-tab"
                                    aria-controls="international-tab" role="tab">
                                    International
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-white hs-tab-active:text-primary py-2 px-5 inline-flex items-center gap-x-2 bg-transparent text-sm text-black hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-primary disabled:opacity-50 disabled:pointer-events-none"
                                    id="domestic-item-tab" aria-selected="false" data-hs-tab="#domestic-tab"
                                    aria-controls="domestic-tab" role="tab">
                                    Domestic
                                </button>
                            </nav>
                        </div>
                    </div>
                    <!--/ Flight Type Navigation Tab  -->

                    <div class="px-8">
                        <!-- International Tab  -->
                        <div id="international-tab" role="tabpanel" aria-labelledby="international-item-tab">
                            <!-- Trip Type Dropdown  -->
                            <div class="absolute top-4 left-[300px]">
                                <div class="relative">
                                    <!-- <select
                                              id="tripType"
                                              data-hs-select='{
                          "placeholder": "Select option...",
                          "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                          "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500",
                          "dropdownClasses": "mt-2 z-50 min-w-[150px] w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                          "optionClasses": "py-2 px-4 min-w-[150px] w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                          "optionTemplate": "<div class=\"flex justify-between items-center w-full min-w-fit\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                        }'
                                            >
                                              <option value="one-way">One Way</option>
                                              <option value="two-way">Two Way</option>
                                              <option value="multi-city">Multi City</option>
                                            </select> -->
                                    <select name="" id="tripType"
                                        class="border-0 py-3 text-sm font-medium rounded-md focus:ring-0">
                                        <option value="one-way">One Way</option>
                                        <option value="two-way">Two Way</option>
                                        <option value="multi-city">Multi City</option>
                                    </select>

                                    <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                                        <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5"></path>
                                            <path d="m7 9 5-5 5 5"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- / Trip Type Dropdown  -->

                            <!-- International Search  -->
                            <div class="mt-3">
                                <!-- International OneTwo Way  -->
                                <div class="search-wrap oneTwoWayLayout w-full justify-items-center items-center bg-white rounded-md"
                                    style="display: flex">
                                    <div class="depcity_col flex border-e">
                                        <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                aria-expanded="false" aria-label="Dropdown"
                                                id="international-departure-drop">
                                                <p class="font-semibold text-xs text-gray-400">FROM</p>
                                                <input type="hidden" id="depcity" value="Kathmandu" />
                                                <input type="hidden" id="depairport"
                                                    value=" [KTM] Tribhuwan International Airport" />
                                                <div class="text-2xl font-semibold" id="d-depcity"></div>
                                                <div class="font-medium text-xs" id="d-depairport"></div>
                                            </div>
                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-d-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="international-departure-drop">
                                                <div class="w-full flex justify-between items-center">
                                                    <h4>Flying From</h4>
                                                    <!-- <button
                                                      class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                    >
                                                      <i class="fa-solid fa-xmark"></i>
                                                    </button> -->
                                                </div>
                                                <div class="relative mt-2">
                                                    <input type="text"
                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                        placeholder="Search Airports, Cities" />
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                    stroke="#929292" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                    stroke="#929292" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swipesector"></div>
                                    <div class="arrcity_col flex border-e">
                                        <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                aria-expanded="false" aria-label="Dropdown"
                                                id="international-departure-drop">
                                                <p class="font-semibold text-xs text-gray-400">TO</p>
                                                <input type="hidden" id="arrcity" value="Delhi" />
                                                <input type="hidden" id="arrairport"
                                                    value="[DEL] Indira Gandhi International Airport" />
                                                <div class="text-2xl font-semibold" id="d-arrcity"></div>

                                                <div class="font-medium text-xs" id="d-arrairport"></div>
                                            </div>
                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-t-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="international-departure-drop">
                                                <div class="w-full flex justify-between items-center">
                                                    <h4>Flying To</h4>
                                                    <!-- <button
                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                  >
                                                    <i class="fa-solid fa-xmark"></i>
                                                  </button> -->
                                                </div>
                                                <div class="relative mt-2">
                                                    <input type="text"
                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                        placeholder="Search Airports, Cities" />
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                    stroke="#929292" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                    stroke="#929292" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex border-e depdate_col">
                                        <div class="innercol">
                                            <p class="font-semibold text-xs text-gray-400">
                                                DEPARTURE DATE
                                            </p>
                                            <!-- <span class="text-2xl font-semibold">19</span>
                                                <span class="text-sm font-medium">Oct'2024</span> -->
                                            <div class="flex items-center">
                                                <input type="text" id="depdate"
                                                    class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                    placeholder="mm/dd/yyyy" />
                                                <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                    src="/public/images/icons/calendar.svg" alt="" />
                                            </div>

                                            <p class="font-medium text-xs">Saturday</p>
                                        </div>
                                    </div>
                                    <div class="flex border-e depdate_col ret-date-col" style="opacity: 0.4">
                                        <div class="innercol relative">
                                            <p class="font-semibold text-xs text-gray-400">
                                                RETRUN DATE
                                            </p>
                                            <div class="flex items-center">
                                                <input type="text" id="returndate"
                                                    class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                    placeholder="mm/dd/yyyy" />
                                                <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                    src="/public/images/icons/calendar.svg" alt="" />
                                            </div>
                                            <p class="font-medium text-xs">Saturday</p>
                                            <div class="absolute top-1 right-2 bg-gray-100 p-2 size-1 rounded-full flex items-center justify-center"
                                                id="intReturnCross">
                                                <i class="fa-solid fa-xmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-col">
                                        <div class="innercol">
                                            <p class="font-semibold text-xs text-gray-400">
                                                TRAELLER & CLASS
                                            </p>
                                            <div
                                                class="mt-1 py-2 mx-1 sm:mt-1 hs-dropdown [--auto-close:inside] relative sm:inline-flex z-20">
                                                <button id="travellers-drop" type="button"
                                                    class="hs-dropdown-toggle inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                    <span id="passenger-count">1</span> Traveller(s)
                                                    <svg class="hs-dropdown-open:rotate-180 size-2.5" width="16"
                                                        height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </button>

                                                <div class="hs-dropdown-menu w-[300px] traveller-drop hs-dropdown-open:opacity-100 opacity-0 hidden bg-white shadow-md rounded-sm mt-2"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="travellers-drop">
                                                    <div class="py-4 px-4 flex flex-col gap-4 bg-white">
                                                        <!-- Adult Number -->
                                                        <div class="" data-hs-input-number="">
                                                            <div
                                                                class="min-w-fit flex justify-between items-center gap-x-3">
                                                                <div class="min-w-fit">
                                                                    <span class="block font-medium text-sm text-gray-800">
                                                                        Adults
                                                                    </span>
                                                                    <span class="block text-xs text-gray-500">
                                                                        (12+ Years)
                                                                    </span>
                                                                </div>
                                                                <div class="flex items-center gap-x-1.5">
                                                                    <button type="button"
                                                                        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                        tabindex="-1" aria-label="Decrease"
                                                                        data-hs-input-number-decrement="">
                                                                        <svg class="shrink-0 size-3.5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M5 12h14"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                        class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                                        style="-moz-appearance: textfield" type="number"
                                                                        aria-roledescription="Number field" value="0"
                                                                        data-hs-input-number-input="" />
                                                                    <button type="button"
                                                                        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                        tabindex="-1" aria-label="Increase"
                                                                        data-hs-input-number-increment="">
                                                                        <svg class="shrink-0 size-3.5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="M12 5v14"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Adult Number -->
                                                        <!-- Children Number -->
                                                        <div class="" data-hs-input-number="">
                                                            <div
                                                                class="min-w-fit flex justify-between items-center gap-x-3">
                                                                <div class="min-w-fit">
                                                                    <span class="block font-medium text-sm text-gray-800">
                                                                        Children
                                                                    </span>
                                                                    <span class="block text-xs text-gray-500">
                                                                        (2 - 12 Years)
                                                                    </span>
                                                                </div>
                                                                <div class="flex items-center gap-x-1.5">
                                                                    <button type="button"
                                                                        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                        tabindex="-1" aria-label="Decrease"
                                                                        data-hs-input-number-decrement="">
                                                                        <svg class="shrink-0 size-3.5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M5 12h14"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                        class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                                        style="-moz-appearance: textfield" type="number"
                                                                        aria-roledescription="Number field" value="0"
                                                                        data-hs-input-number-input="" />
                                                                    <button type="button"
                                                                        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                        tabindex="-1" aria-label="Increase"
                                                                        data-hs-input-number-increment="">
                                                                        <svg class="shrink-0 size-3.5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="M12 5v14"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Children Number -->
                                                        <!-- Infant Number -->
                                                        <div class="" data-hs-input-number="">
                                                            <div
                                                                class="min-w-fit flex justify-between items-center gap-x-3">
                                                                <div class="min-w-fit">
                                                                    <span class="block font-medium text-sm text-gray-800">
                                                                        Infant
                                                                    </span>
                                                                    <span class="block text-xs text-gray-500">
                                                                        (0 - 2 Years)
                                                                    </span>
                                                                </div>
                                                                <div class="flex items-center gap-x-1.5">
                                                                    <button type="button"
                                                                        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                        tabindex="-1" aria-label="Decrease"
                                                                        data-hs-input-number-decrement="">
                                                                        <svg class="shrink-0 size-3.5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M5 12h14"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                        class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                                        style="-moz-appearance: textfield" type="number"
                                                                        aria-roledescription="Number field" value="0"
                                                                        data-hs-input-number-input="" />
                                                                    <button type="button"
                                                                        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                        tabindex="-1" aria-label="Increase"
                                                                        data-hs-input-number-increment="">
                                                                        <svg class="shrink-0 size-3.5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="M12 5v14"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Infant Number -->

                                                        <!-- Nationality  -->

                                                        <div>
                                                            <label for=""
                                                                class="text-xs font-medium pb-1">Nationality</label>
                                                            <select
                                                                data-hs-select='{
                                  "placeholder": "Select Nationality...",
                                  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500",
                                  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }'
                                                                class="hidden">
                                                                <option>Nepal</option>
                                                                <option>India</option>
                                                                <option>China</option>
                                                            </select>
                                                        </div>

                                                        <!-- End Nationality  -->

                                                        <!-- Class Radio  -->
                                                        <div class="flex">
                                                            <input type="radio" name="international-class-radio"
                                                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                id="economy" checked />
                                                            <label for="economy"
                                                                class="text-sm text-gray-500 ms-2">Economy</label>
                                                        </div>

                                                        <div class="flex">
                                                            <input type="radio" name="international-class-radio"
                                                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                id="premium-economy" />
                                                            <label for="premium-economy"
                                                                class="text-sm text-gray-500 ms-2">Premium Economy</label>
                                                        </div>
                                                        <div class="flex">
                                                            <input type="radio" name="international-class-radio"
                                                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                id="business" />
                                                            <label for="business"
                                                                class="text-sm text-gray-500 ms-2">Business</label>
                                                        </div>
                                                        <div class="flex">
                                                            <input type="radio" name="international-class-radio"
                                                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                id="first-class" />
                                                            <label for="first-class"
                                                                class="text-sm text-gray-500 ms-2">First
                                                                Class</label>
                                                        </div>
                                                        <!-- End Class Radio -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="font-medium text-xs text-gray-700">
                                                Economy
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-col">
                                        <button class="bg-secondary py-10 w-full text-xl text-white font-semibold ">
                                            SEARCH
                                        </button>
                                    </div>
                                </div>
                                <!-- / International OneTwo Way  -->

                                <!-- International Multi City -->
                                <div class="international-multi-city" style="display: none">
                                    <div class="search-wrap w-full bg-white rounded-md">
                                        <div class="flex justify-items-center items-center">
                                            <div class="flex border-e">
                                                <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                    <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                        aria-expanded="false" aria-label="Dropdown"
                                                        id="international-departure-drop">
                                                        <p class="font-semibold text-xs text-gray-400">
                                                            FROM
                                                        </p>

                                                        <div class="text-2xl font-semibold">Kathmandu</div>
                                                        <div class="font-medium text-xs">
                                                            [KTM] Tribhuwan International Airport
                                                        </div>
                                                    </div>
                                                    <div class="px-4 py-3 z-50 hs-dropdown-menu search-d-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                        role="menu" aria-orientation="vertical"
                                                        aria-labelledby="international-departure-drop">
                                                        <div class="w-full flex justify-between items-center">
                                                            <h4>Flying From</h4>
                                                            <!-- <button
                                                      class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                    >
                                                      <i class="fa-solid fa-xmark"></i>
                                                    </button> -->
                                                        </div>
                                                        <div class="relative mt-2">
                                                            <input type="text"
                                                                class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                placeholder="Search Airports, Cities" />
                                                            <div
                                                                class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                        stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path
                                                                            d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                            stroke="#929292" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                            stroke="#929292" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex border-e">
                                                <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                    <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                        aria-expanded="false" aria-label="Dropdown"
                                                        id="international-departure-drop">
                                                        <p class="font-semibold text-xs text-gray-400">
                                                            TO
                                                        </p>

                                                        <div class="text-2xl font-semibold">Delhi</div>

                                                        <div class="font-medium text-xs">
                                                            [DEL] Indira Gandhi International Airport
                                                        </div>
                                                    </div>
                                                    <div class="px-4 py-3 z-50 hs-dropdown-menu search-t-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                        role="menu" aria-orientation="vertical"
                                                        aria-labelledby="international-departure-drop">
                                                        <div class="w-full flex justify-between items-center">
                                                            <h4>Flying To</h4>
                                                            <!-- <button
                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                  >
                                                    <i class="fa-solid fa-xmark"></i>
                                                  </button> -->
                                                        </div>
                                                        <div class="relative mt-2">
                                                            <input type="text"
                                                                class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                placeholder="Search Airports, Cities" />
                                                            <div
                                                                class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                        stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path
                                                                            d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                            stroke="#929292" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                            stroke="#929292" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex border-e">
                                                <div class="innercol">
                                                    <p class="font-semibold text-xs text-gray-400">
                                                        DEPARTURE DATE
                                                    </p>
                                                    <!-- <span class="text-2xl font-semibold">19</span>
                                                <span class="text-sm font-medium">Oct'2024</span> -->
                                                    <div class="flex items-center">
                                                        <input type="text" id="multi-depdate1"
                                                            class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                            placeholder="mm/dd/yyyy" />
                                                        <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                            src="/public/images/icons/calendar.svg" alt="" />
                                                    </div>

                                                    <p class="font-medium text-xs">Saturday</p>
                                                </div>
                                            </div>

                                            <div class="search-col py-3">
                                                <div class="innercol">
                                                    <p class="font-semibold text-xs text-gray-400">
                                                        TRAELLER & CLASS
                                                    </p>
                                                    <div
                                                        class="mt-1 py-2 mx-1 sm:mt-1 hs-dropdown [--auto-close:inside] relative sm:inline-flex z-20">
                                                        <button id="travellers-drop" type="button"
                                                            class="hs-dropdown-toggle inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown">
                                                            <span id="passenger-count">1</span> Traveller(s)
                                                            <svg class="hs-dropdown-open:rotate-180 size-2.5"
                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" />
                                                            </svg>
                                                        </button>

                                                        <div class="hs-dropdown-menu w-[300px] traveller-drop hs-dropdown-open:opacity-100 opacity-0 hidden bg-white shadow-md rounded-sm mt-2"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="travellers-drop">
                                                            <div class="py-4 px-4 flex flex-col gap-4 bg-white">
                                                                <!-- Adult Number -->
                                                                <div class="" data-hs-input-number="">
                                                                    <div
                                                                        class="min-w-fit flex justify-between items-center gap-x-3">
                                                                        <div class="min-w-fit">
                                                                            <span
                                                                                class="block font-medium text-sm text-gray-800">
                                                                                Adults
                                                                            </span>
                                                                            <span class="block text-xs text-gray-500">
                                                                                (12+ Years)
                                                                            </span>
                                                                        </div>
                                                                        <div class="flex items-center gap-x-1.5">
                                                                            <button type="button"
                                                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                                tabindex="-1" aria-label="Decrease"
                                                                                data-hs-input-number-decrement="">
                                                                                <svg class="shrink-0 size-3.5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M5 12h14"></path>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                                                style="-moz-appearance: textfield"
                                                                                type="number"
                                                                                aria-roledescription="Number field"
                                                                                value="0"
                                                                                data-hs-input-number-input="" />
                                                                            <button type="button"
                                                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                                tabindex="-1" aria-label="Increase"
                                                                                data-hs-input-number-increment="">
                                                                                <svg class="shrink-0 size-3.5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M5 12h14"></path>
                                                                                    <path d="M12 5v14"></path>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Adult Number -->
                                                                <!-- Children Number -->
                                                                <div class="" data-hs-input-number="">
                                                                    <div
                                                                        class="min-w-fit flex justify-between items-center gap-x-3">
                                                                        <div class="min-w-fit">
                                                                            <span
                                                                                class="block font-medium text-sm text-gray-800">
                                                                                Children
                                                                            </span>
                                                                            <span class="block text-xs text-gray-500">
                                                                                (2 - 12 Years)
                                                                            </span>
                                                                        </div>
                                                                        <div class="flex items-center gap-x-1.5">
                                                                            <button type="button"
                                                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                                tabindex="-1" aria-label="Decrease"
                                                                                data-hs-input-number-decrement="">
                                                                                <svg class="shrink-0 size-3.5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M5 12h14"></path>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                                                style="-moz-appearance: textfield"
                                                                                type="number"
                                                                                aria-roledescription="Number field"
                                                                                value="0"
                                                                                data-hs-input-number-input="" />
                                                                            <button type="button"
                                                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                                tabindex="-1" aria-label="Increase"
                                                                                data-hs-input-number-increment="">
                                                                                <svg class="shrink-0 size-3.5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M5 12h14"></path>
                                                                                    <path d="M12 5v14"></path>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Children Number -->
                                                                <!-- Infant Number -->
                                                                <div class="" data-hs-input-number="">
                                                                    <div
                                                                        class="min-w-fit flex justify-between items-center gap-x-3">
                                                                        <div class="min-w-fit">
                                                                            <span
                                                                                class="block font-medium text-sm text-gray-800">
                                                                                Infant
                                                                            </span>
                                                                            <span class="block text-xs text-gray-500">
                                                                                (0 - 2 Years)
                                                                            </span>
                                                                        </div>
                                                                        <div class="flex items-center gap-x-1.5">
                                                                            <button type="button"
                                                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                                tabindex="-1" aria-label="Decrease"
                                                                                data-hs-input-number-decrement="">
                                                                                <svg class="shrink-0 size-3.5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M5 12h14"></path>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                                                style="-moz-appearance: textfield"
                                                                                type="number"
                                                                                aria-roledescription="Number field"
                                                                                value="0"
                                                                                data-hs-input-number-input="" />
                                                                            <button type="button"
                                                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                                                tabindex="-1" aria-label="Increase"
                                                                                data-hs-input-number-increment="">
                                                                                <svg class="shrink-0 size-3.5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M5 12h14"></path>
                                                                                    <path d="M12 5v14"></path>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Infant Number -->

                                                                <!-- Class Radio  -->
                                                                <div class="flex">
                                                                    <input type="radio" name="international-class-radio"
                                                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                        id="economy" checked />
                                                                    <label for="economy"
                                                                        class="text-sm text-gray-500 ms-2">Economy</label>
                                                                </div>

                                                                <div class="flex">
                                                                    <input type="radio" name="international-class-radio"
                                                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                        id="premium-economy" />
                                                                    <label for="premium-economy"
                                                                        class="text-sm text-gray-500 ms-2">Premium
                                                                        Economy</label>
                                                                </div>
                                                                <div class="flex">
                                                                    <input type="radio" name="international-class-radio"
                                                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                        id="business" />
                                                                    <label for="business"
                                                                        class="text-sm text-gray-500 ms-2">Business</label>
                                                                </div>
                                                                <div class="flex">
                                                                    <input type="radio" name="international-class-radio"
                                                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                                        id="first-class" />
                                                                    <label for="first-class"
                                                                        class="text-sm text-gray-500 ms-2">First
                                                                        Class</label>
                                                                </div>
                                                                <!-- End Class Radio -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="font-medium text-xs text-gray-700">
                                                        Economy
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="multi-container">
                                                <div class="flex justify-items-center items-center border-t"
                                                    style="display: flex">
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    FROM
                                                                </p>

                                                                <div class="text-2xl font-semibold">
                                                                    Kathmandu
                                                                </div>
                                                                <div class="font-medium text-xs">
                                                                    [KTM] Tribhuwan International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-d-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying From</h4>
                                                                    <!-- <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                          >
                                                            <i class="fa-solid fa-xmark"></i>
                                                          </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    TO
                                                                </p>

                                                                <div class="text-2xl font-semibold">Delhi</div>

                                                                <div class="font-medium text-xs">
                                                                    [DEL] Indira Gandhi International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-t-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying To</h4>
                                                                    <!-- <button
                                                          class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                        >
                                                          <i class="fa-solid fa-xmark"></i>
                                                        </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e py-3">
                                                        <div class="innercol">
                                                            <p class="font-semibold text-xs text-gray-400">
                                                                DEPARTURE DATE
                                                            </p>
                                                            <!-- <span class="text-2xl font-semibold">19</span>
                                                      <span class="text-sm font-medium">Oct'2024</span> -->
                                                            <div class="flex items-center">
                                                                <input type="text" id="multi-depdate2"
                                                                    class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                                    placeholder="mm/dd/yyyy" />
                                                                <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                                    src="/public/images/icons/calendar.svg"
                                                                    alt="" />
                                                            </div>

                                                            <p class="font-medium text-xs">Saturday</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-items-center items-center border-t"
                                                    style="display: none">
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    FROM
                                                                </p>

                                                                <div class="text-2xl font-semibold">
                                                                    Kathmandu
                                                                </div>
                                                                <div class="font-medium text-xs">
                                                                    [KTM] Tribhuwan International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-d-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying From</h4>
                                                                    <!-- <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                          >
                                                            <i class="fa-solid fa-xmark"></i>
                                                          </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    TO
                                                                </p>

                                                                <div class="text-2xl font-semibold">Delhi</div>

                                                                <div class="font-medium text-xs">
                                                                    [DEL] Indira Gandhi International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-t-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying To</h4>
                                                                    <!-- <button
                                                          class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                        >
                                                          <i class="fa-solid fa-xmark"></i>
                                                        </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e py-3">
                                                        <div class="innercol">
                                                            <p class="font-semibold text-xs text-gray-400">
                                                                DEPARTURE DATE
                                                            </p>
                                                            <!-- <span class="text-2xl font-semibold">19</span>
                                                      <span class="text-sm font-medium">Oct'2024</span> -->
                                                            <div class="flex items-center">
                                                                <input type="text" id="multi-depdate3"
                                                                    class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                                    placeholder="mm/dd/yyyy" />
                                                                <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                                    src="/public/images/icons/calendar.svg"
                                                                    alt="" />
                                                            </div>

                                                            <p class="font-medium text-xs">Saturday</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-items-center items-center border-t"
                                                    style="display: none">
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    FROM
                                                                </p>

                                                                <div class="text-2xl font-semibold">
                                                                    Kathmandu
                                                                </div>
                                                                <div class="font-medium text-xs">
                                                                    [KTM] Tribhuwan International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-d-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying From</h4>
                                                                    <!-- <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                          >
                                                            <i class="fa-solid fa-xmark"></i>
                                                          </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    TO
                                                                </p>

                                                                <div class="text-2xl font-semibold">Delhi</div>

                                                                <div class="font-medium text-xs">
                                                                    [DEL] Indira Gandhi International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-t-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying To</h4>
                                                                    <!-- <button
                                                          class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                        >
                                                          <i class="fa-solid fa-xmark"></i>
                                                        </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e py-3">
                                                        <div class="innercol">
                                                            <p class="font-semibold text-xs text-gray-400">
                                                                DEPARTURE DATE
                                                            </p>
                                                            <!-- <span class="text-2xl font-semibold">19</span>
                                                      <span class="text-sm font-medium">Oct'2024</span> -->
                                                            <div class="flex items-center">
                                                                <input type="text" id="multi-depdate4"
                                                                    class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                                    placeholder="mm/dd/yyyy" />
                                                                <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                                    src="/public/images/icons/calendar.svg"
                                                                    alt="" />
                                                            </div>

                                                            <p class="font-medium text-xs">Saturday</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-items-center items-center border-t"
                                                    style="display: none">
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle" aria-haspopup="menu"
                                                                aria-expanded="false" aria-label="Dropdown"
                                                                id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    FROM
                                                                </p>

                                                                <div class="text-2xl font-semibold">
                                                                    Kathmandu
                                                                </div>
                                                                <div class="font-medium text-xs">
                                                                    [KTM] Tribhuwan International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-d-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying From</h4>
                                                                    <!-- <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                          >
                                                            <i class="fa-solid fa-xmark"></i>
                                                          </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e">
                                                        <div
                                                            class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                            <div class="innercol hs-dropdwon-toggle"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown" id="international-departure-drop">
                                                                <p class="font-semibold text-xs text-gray-400">
                                                                    TO
                                                                </p>

                                                                <div class="text-2xl font-semibold">Delhi</div>

                                                                <div class="font-medium text-xs">
                                                                    [DEL] Indira Gandhi International Airport
                                                                </div>
                                                            </div>
                                                            <div class="px-4 py-3 z-50 hs-dropdown-menu search-t-transform duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 top-0"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="international-departure-drop">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <h4>Flying To</h4>
                                                                    <!-- <button
                                                          class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center"
                                                        >
                                                          <i class="fa-solid fa-xmark"></i>
                                                        </button> -->
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input type="text"
                                                                        class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                        placeholder="Search Airports, Cities" />
                                                                    <div
                                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                        <svg width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                            </g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                    stroke="#929292" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex border-e py-3">
                                                        <div class="innercol">
                                                            <p class="font-semibold text-xs text-gray-400">
                                                                DEPARTURE DATE
                                                            </p>
                                                            <!-- <span class="text-2xl font-semibold">19</span>
                                                      <span class="text-sm font-medium">Oct'2024</span> -->
                                                            <div class="flex items-center">
                                                                <input type="text" id="multi-depdate5"
                                                                    class="peer px-0 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                                    placeholder="mm/dd/yyyy" />
                                                                <img class="w-[17px] h-[17px] float-right mt-[8px]"
                                                                    src="/public/images/icons/calendar.svg"
                                                                    alt="" />
                                                            </div>

                                                            <p class="font-medium text-xs">Saturday</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <div class="innercol">
                                                    <div class="flex gap-2 w-full items-center">
                                                        <button
                                                            class="search bg-secondary text-white px-6 w-full py-3 text-lg font-medium uppercase rounded-full min-w-fit">
                                                            search
                                                        </button>
                                                        <button
                                                            class="addmultibtn border uppercase text-base rounded-full px-5 py-3 text-primary font-medium border-primary min-w-fit"
                                                            style="display: inline-block" type="button"
                                                            onclick="addMultiRow()">
                                                            + Add city
                                                        </button>
                                                        <button
                                                            class="removemultibtn border uppercase text-sm items-center gap-1 rounded-full h-[16px] w-[16px] py-3 px-2 text-gray-600 font-medium border-gratext-gray-600 min-w-fit"
                                                            style="display: none" type="button"
                                                            onclick="removeMultiRow()">
                                                            <i class="fa-solid fa-xmark text-gray-600"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / International Multi City -->
                            </div>
                            <!-- / International Search  -->
                        </div>
                        <!--/ International Tab  -->

                        <!-- Domestic Tab  -->
                        <div class="hidden" id="domestic-tab" role="tabpanel" aria-labelledby="domestic-item-tab">
                                                        <!-- Domestic Search  -->
                            @include('frontend.home.domestic')
                            <!-- / Domestic Search  -->
                        </div>
                        <!--/ Domestic Tab  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / Search Box  -->

        <!-- Responsive SearchBox  -->
        <div class="r-search-box mt-4">
            <div class="container max-auto">
                <div class="px-4 py-4">
                    <div class="bg-white rounded-lg shadow-md px-4 py-4">
                        <!-- Tab Header  -->
                        <nav class="flex justify-center gap-x-1" aria-label="Tabs" role="tablist"
                            aria-orientation="horizontal">
                            <button type="button"
                                class="hs-tab-active:bg-secondary hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active: py-2 px-6 inline-flex items-center gap-x-2 bg-transparent text-base font-medium text-center text-gray-500 hover:text-secondary focus:outline-none focus:text-secondary-lighter rounded-lg disabled:opacity-50 disabled:pointer-events-none active"
                                id="pills-with-brand-color-item-1" aria-selected="true"
                                data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1"
                                role="tab">
                                International
                            </button>
                            <button type="button"
                                class="hs-tab-active:bg-secondary hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active: py-2 px-6 inline-flex items-center gap-x-2 bg-transparent text-base font-medium text-center text-gray-500 hover:text-secondary focus:outline-none focus:text-secondary-lighter rounded-lg disabled:opacity-50 disabled:pointer-events-none"
                                id="pills-with-brand-color-item-2" aria-selected="false"
                                data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2"
                                role="tab">
                                Domestic
                            </button>
                        </nav>
                        <!-- / Tab Header  -->

                        <div class="mt-3">
                            <!-- International Tab  -->
                            <div id="pills-with-brand-color-1" role="tabpanel"
                                aria-labelledby="pills-with-brand-color-item-1">
                                <div class="flex">
                                    <label for="international-radio-one"
                                        class="flex py-1 px-5 w-full text-center bg-white rounded-3xl text-sm focus:border-primary focus:ring-primary text-gray-500 has-[:checked]:bg-primary has-[:checked]:text-white">
                                        <input type="radio" name="international-radio"
                                            class="hidden shrink-0 mt-0.5 border-gray-200 rounded-full text-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                            id="international-radio-one" checked />
                                        <span class="text-sm text-center w-full">One Way</span>
                                    </label>
                                    <label for="international-radio-two"
                                        class="flex py-1 px-5 w-full text-center bg-white rounded-3xl text-sm focus:border-primary focus:ring-primary text-gray-500 has-[:checked]:bg-primary has-[:checked]:text-white">
                                        <input type="radio" name="international-radio"
                                            class="hidden shrink-0 mt-0.5 border-gray-200 rounded-full text-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                            id="international-radio-two" />
                                        <span class="text-sm text-center w-full">Two Way</span>
                                    </label>
                                    <label for="international-radio-multi"
                                        class="flex py-1 px-5 w-full text-center bg-white rounded-3xl text-sm focus:border-primary focus:ring-primary text-gray-500 has-[:checked]:bg-primary has-[:checked]:text-white">
                                        <input type="radio" name="international-radio"
                                            class="hidden shrink-0 mt-0.5 border-gray-200 rounded-full text-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                            id="international-radio-multi" />
                                        <span class="text-sm text-center w-full">Multi City</span>
                                    </label>
                                </div>

                                <!-- One / Two Way  -->
                                <div class="grid grid-cols-2 gap-4 mt-3 r-singlecity" style="display: grid">
                                    <div class="r-from relative">
                                        <div class="border border-primary px-2 py-3 rounded-lg">
                                            <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                <div class="hs-dropdown-toggle flex flex-col items-center justify-center w-full"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                                    id="departure-dropdown">
                                                    <input id="r-depairport" type="hidden" readonly value="GOI" />
                                                    <input id="r-depcity" type="hidden" readonly value="goa" />
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        FROM
                                                    </p>
                                                    <div class="text-3xl text-black font-bold uppercase leading-10 boarder-0"
                                                        id="display-depairport"></div>
                                                    <div class="text-xs text-black font-semibold uppercase overflow-hidden text-ellipsis"
                                                        id="display-depcity"></div>
                                                </div>
                                                <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="departure-dropdown">
                                                    <div class="w-full flex justify-between items-center">
                                                        <h4>Flying From</h4>
                                                        <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                    <div class="relative mt-2">
                                                        <input type="text"
                                                            class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                            placeholder="Search Airports, Cities" />
                                                        <div
                                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path
                                                                        d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path
                                                                        d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="r-swipesector absolute top-7 -right-7 border border-primary"
                                            id="r-swapinput"></div>
                                    </div>
                                    <div class="r-to">
                                        <div class="border border-primary px-2 py-3 rounded-lg">
                                            <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                <div class="hs-dropdown-toggle flex flex-col items-center justify-center w-full"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                                    id="return-dropdown">
                                                    <input id="r-arrairport" type="hidden" readonly value="BLR" />
                                                    <input id="r-arrcity" type="hidden" readonly value="banglore" />
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        TO
                                                    </p>
                                                    <div class="text-3xl text-black font-bold uppercase border-0 leading-10"
                                                        id="display-arrairport"></div>
                                                    <div class="text-xs text-black font-semibold uppercase overflow-hidden text-ellipsis"
                                                        id="display-arrcity"></div>
                                                </div>
                                                <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="return-dropdown">
                                                    <div class="w-full flex justify-between items-center">
                                                        <h4>Flying To</h4>
                                                        <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                    <div class="relative mt-2">
                                                        <input type="text"
                                                            class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                            placeholder="Search Airports, Cities" />
                                                        <div
                                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path
                                                                        d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path
                                                                        d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-dep">
                                        <div
                                            class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Departure Date
                                            </p>
                                            <div class="relative">
                                                <input type="text" id="r-depdate"
                                                    class="peer pe-2 pt-2 pb-2 ps-8 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                    placeholder="mm/dd/yyyy" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                    <svg width="25px" height="25px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                                stroke="#929292" stroke-width="1"
                                                                stroke-linecap="round">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-return" style="opacity: 0.4">
                                        <div
                                            class="relative border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Return Date
                                            </p>
                                            <div class="relative">
                                                <input type="text" id="r-returndate"
                                                    class="peer pe-2 pt-2 pb-2 ps-8 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                    placeholder="mm/dd/yyyy" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                    <svg width="25px" height="25px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                                stroke="#929292" stroke-width="1"
                                                                stroke-linecap="round">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="absolute top-2 right-2 bg-gray-100 p-2 size-1 rounded-full flex items-center justify-center"
                                                id="returnCross">
                                                <i class="fa-solid fa-xmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-travellers">
                                        <div
                                            class="relative border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Traveller(s)
                                            </p>
                                            <!-- Travellers Count  -->
                                            <div class="travellers-count">
                                                <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                                    aria-controls="hs-offcanvas-bottom-international"
                                                    data-hs-overlay="#hs-offcanvas-bottom-international"
                                                    class="py-1 text-sm text-black font-semibold">
                                                    Travellers
                                                </button>
                                                <div id="hs-offcanvas-bottom-international"
                                                    class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform max-h-[32rem] size-full z-[80] bg-white border-b hidden"
                                                    role="dialog" tabindex="-1"
                                                    aria-labelledby="hs-offcanvas-bottom-label">
                                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                                        <h3 id="hs-offcanvas-bottom-label"
                                                            class="font-medium text-lg text-gray-800">
                                                            No. of Travellers
                                                        </h3>
                                                        <!-- <button
                                                      type="button"
                                                      class="size-8 inline-flex justify-center text-lg text-primary items-center gap-x-2 border border-transparent hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                    >
                                                      Done
                                                    </button> -->
                                                    </div>
                                                    <!-- No of Travellers Select  -->
                                                    <div class="p-4">
                                                        <!-- Adult Travellers  -->
                                                        <div class="adult-travellers">
                                                            <label class="" for="adultcount">
                                                                <span class="font-semibold">Adults</span> (12+
                                                                yrs)</label>
                                                            <div class="flex gap-2 mt-2">
                                                                <label for="adult-1"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-1" />
                                                                    <span class="text-sm">1</span>
                                                                </label>

                                                                <label for="adult-2"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-2" />
                                                                    <span class="text-sm">2</span>
                                                                </label>

                                                                <label for="adult-3"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-3" />
                                                                    <span class="text-sm">3</span>
                                                                </label>
                                                                <label for="adult-4"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-4" />
                                                                    <span class="text-sm">4</span>
                                                                </label>
                                                                <label for="adult-5"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-5" />
                                                                    <span class="text-sm">5</span>
                                                                </label>
                                                                <label for="adult-6"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-6" />
                                                                    <span class="text-sm">6</span>
                                                                </label>
                                                                <label for="adult-7"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-7" />
                                                                    <span class="text-sm">7</span>
                                                                </label>
                                                                <label for="adult-8"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-8" />
                                                                    <span class="text-sm">8</span>
                                                                </label>
                                                                <label for="adult-9"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-9" />
                                                                    <span class="text-sm">9</span>
                                                                </label>
                                                            </div>
                                                            <input name="adultcount" id="adultcount" type="hidden" />
                                                        </div>
                                                        <!-- / Adult Travellers  -->

                                                        <!-- Children Travellers -->
                                                        <div class="children-travellers mt-6">
                                                            <label class="" for="childrencount">
                                                                <span class="font-semibold">Children</span>
                                                                (2-12 yrs)</label>
                                                            <div class="flex gap-2 mt-2">
                                                                <label for="children-0"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-0" />
                                                                    <span class="text-sm">0</span>
                                                                </label>
                                                                <label for="children-1"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-1" />
                                                                    <span class="text-sm">1</span>
                                                                </label>

                                                                <label for="children-2"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-2" />
                                                                    <span class="text-sm">2</span>
                                                                </label>

                                                                <label for="children-3"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-3" />
                                                                    <span class="text-sm">3</span>
                                                                </label>
                                                                <label for="children-4"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-4" />
                                                                    <span class="text-sm">4</span>
                                                                </label>
                                                                <label for="children-5"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-5" />
                                                                    <span class="text-sm">5</span>
                                                                </label>
                                                                <label for="children-6"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-6" />
                                                                    <span class="text-sm">6</span>
                                                                </label>
                                                                <label for="children-7"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-7" />
                                                                    <span class="text-sm">7</span>
                                                                </label>
                                                                <label for="children-8"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-8" />
                                                                    <span class="text-sm">8</span>
                                                                </label>
                                                            </div>
                                                            <input name="childrencount" id="childrencount"
                                                                type="hidden" />
                                                        </div>
                                                        <!-- / Children Travellers -->

                                                        <!-- Infant Travellers  -->
                                                        <div class="infant-travellers mt-6">
                                                            <label class="" for="infantcount">
                                                                <span class="font-semibold">Infant</span> (0-2
                                                                yrs)</label>
                                                            <div class="flex gap-2 mt-2">
                                                                <label for="infant-0"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-0" />
                                                                    <span class="text-sm">0</span>
                                                                </label>
                                                                <label for="infant-1"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-1" />
                                                                    <span class="text-sm">1</span>
                                                                </label>
                                                                <label for="infant-2"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-2" />
                                                                    <span class="text-sm">2</span>
                                                                </label>
                                                                <label for="infant-3"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-3" />
                                                                    <span class="text-sm">3</span>
                                                                </label>
                                                                <label for="infant-4"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-4" />
                                                                    <span class="text-sm">4</span>
                                                                </label>
                                                            </div>
                                                            <input name="infantcount" id="infantcount"
                                                                type="hidden" />
                                                        </div>
                                                        <!-- / Infant Travellers  -->
                                                        <!-- Infant Travellers  -->
                                                        <div class="nationality mt-6">
                                                            <label for="">
                                                                <span class="font-semibold">Nationality</span></label>

                                                            <select
                                                                data-hs-select='{
                                "placeholder": "Select Nationality...",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                              }'
                                                                class="hidden">
                                                                <option>Nepal</option>
                                                                <option>India</option>
                                                                <option>China</option>
                                                            </select>
                                                        </div>
                                                        <!-- / Infant Travellers  -->

                                                        <div
                                                            class="py-1 px-2 rounded text-base font-medium mt-6 bg-primary-lighter">
                                                            For 10 Passengers or above kindly send the email
                                                            on
                                                            <span class="text-primary">flights@flights.com</span>
                                                        </div>
                                                    </div>
                                                    <!-- / No of Travellers Select  -->
                                                </div>
                                            </div>
                                            <!-- / Travellers Count  -->
                                        </div>
                                    </div>
                                    <div class="r-class">
                                        <div
                                            class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Class
                                            </p>

                                            <div class="w-full">
                                                <select
                                                    data-hs-select='{
  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-1 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white rounded-lg text-start text-sm text-black font-semibold",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 rounded-lg overflow-hidden overflow-y-auto bg-white m-w-fit",
  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg m-w-fit text-sm text-black font-semibold",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full m-w-fit\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
  }'
                                                    class="hidden">
                                                    <option>Economy</option>
                                                    <option>Premium Economy</option>
                                                    <option>Business</option>
                                                    <option>First Class</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-search col-span-2">
                                        <button class="bg-primary w-full py-3 text-white rounded-3xl">
                                            SEARCH
                                        </button>
                                    </div>
                                </div>
                                <!-- / One / Two Way  -->

                                <!-- Multi City  -->
                                <div class="r-multicity row-container" style="display: none">
                                    <div class="multi-city1 mt-2">
                                        <div class="flex gap-4 items-center">
                                            <div class="r-multi-from w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="from-multi-drop1">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                from
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="from-multi-drop1">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying From</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-to w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="to-multi-drop1">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                to
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="to-multi-drop1">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-depdate w-full">
                                                <div
                                                    class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        Departure
                                                    </p>
                                                    <div class="relative">
                                                        <input type="text" id="r-multicity1"
                                                            class="peer text-xs block px-0 w-full bg-transparent border-0 text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                            placeholder="mm/dd/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="multi-city2 mt-2">
                                        <div class="flex gap-4 items-center">
                                            <div class="r-multi-from w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="from-multi-drop2">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                from
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="from-multi-drop2">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying From</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-to w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="to-multi-drop2">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                to
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="to-multi-drop2">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-depdate w-full">
                                                <div
                                                    class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        Departure
                                                    </p>
                                                    <div class="relative">
                                                        <input type="text" id="r-multicity2"
                                                            class="peer text-xs block px-0 w-full bg-transparent border-0 text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                            placeholder="mm/dd/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="multi-city3 mt-2" style="display: none">
                                        <div class="flex gap-4 items-center">
                                            <div class="r-multi-from w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="from-multi-drop3">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                from
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="from-multi-drop3">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying From</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-to w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="to-multi-drop3">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                to
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="to-multi-drop3">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-depdate w-full">
                                                <div
                                                    class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        Departure
                                                    </p>
                                                    <div class="relative">
                                                        <input type="text" id="r-multicity3"
                                                            class="peer text-xs block px-0 w-full bg-transparent border-0 text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                            placeholder="mm/dd/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="multi-city4 mt-2" style="display: none">
                                        <div class="flex gap-4 items-center">
                                            <div class="r-multi-from w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="from-multi-drop4">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                from
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="from-multi-drop4">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-to w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="to-multi-drop4">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                to
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="to-multi-drop4">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-depdate w-full">
                                                <div
                                                    class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        Departure
                                                    </p>
                                                    <div class="relative">
                                                        <input type="text" id="r-multicity4"
                                                            class="peer text-xs block px-0 w-full bg-transparent border-0 text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                            placeholder="mm/dd/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="multi-city5 mt-2" style="display: none">
                                        <div class="flex gap-4 items-center">
                                            <div class="r-multi-from w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="from-multi-drop5">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                from
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="from-multi-drop5">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-to w-full">
                                                <div class="border border-primary px-1 py-2 rounded-lg">
                                                    <div
                                                        class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                        <div class="hs-dropdown-toggle flex flex-col items-start justify-center w-full"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown" id="to-multi-drop5">
                                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                                to
                                                            </p>
                                                            <p
                                                                class="text-lg text-black font-medium uppercase border-0 leading-6">
                                                                BLR
                                                            </p>
                                                            <p
                                                                class="text-xs text-black font-medium uppercase overflow-hidden text-ellipsis">
                                                                bangalore
                                                            </p>

                                                            <input id="r-arrcity" type="text" hidden />
                                                        </div>
                                                        <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="to-multi-drop5">
                                                            <div class="w-full flex justify-between items-center">
                                                                <h4>Flying To</h4>
                                                                <button
                                                                    class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                            <div class="relative mt-2">
                                                                <input type="text"
                                                                    class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                                    placeholder="Search Airports, Cities" />
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path
                                                                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path
                                                                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                                stroke="#929292" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r-multi-depdate w-full">
                                                <div
                                                    class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        Departure
                                                    </p>
                                                    <div class="relative">
                                                        <input type="text" id="r-multicity5"
                                                            class="peer text-xs block px-0 w-full bg-transparent border-0 text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                            placeholder="mm/dd/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add Remove Buttons  -->
                                    <button
                                        class="addbtn border uppercase text-xs rounded-lg p-2 mt-2 text-primary font-medium border-primary"
                                        style="display: inline-block" type="button" onclick="addRow()">
                                        Add city
                                    </button>
                                    <button
                                        class="removebtn border uppercase text-xs rounded-lg p-2 mt-2 font-medium border-gray-400 text-gray-400"
                                        style="display: none" type="button" onclick="removeRow()">
                                        Remove
                                    </button>
                                    <!-- / Add Remove Buttons  -->
                                </div>
                                <!-- / Multi City  -->
                            </div>
                            <!-- / International Tab  -->

                            <!-- Domestic Tab  -->
                            <div id="pills-with-brand-color-2" class="hidden" role="tabpanel"
                                aria-labelledby="pills-with-brand-color-item-2">
                                <div class="flex">
                                    <label for="domestic-radio-one"
                                        class="flex py-1 px-5 w-full text-center bg-white rounded-3xl text-sm focus:border-primary focus:ring-primary text-gray-500 has-[:checked]:bg-primary has-[:checked]:text-white">
                                        <input type="radio" name="domestic-radio"
                                            class="hidden shrink-0 mt-0.5 border-gray-200 rounded-full text-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                            id="domestic-radio-one" checked />
                                        <span class="text-sm text-center w-full">One Way</span>
                                    </label>
                                    <label for="domestic-radio-two"
                                        class="flex py-1 px-5 w-full text-center bg-white rounded-3xl text-sm focus:border-primary focus:ring-primary text-gray-500 has-[:checked]:bg-primary has-[:checked]:text-white">
                                        <input type="radio" name="domestic-radio"
                                            class="hidden shrink-0 mt-0.5 border-gray-200 rounded-full text-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                            id="domestic-radio-two" />
                                        <span class="text-sm text-center w-full">Two Way</span>
                                    </label>
                                </div>

                                <!-- Domestic One / Two Way  -->
                                <div class="grid grid-cols-2 gap-4 mt-3 r-singlecity-domestic" style="display: grid">
                                    <div class="r-from-domestic relative">
                                        <div class="border border-primary px-2 py-3 rounded-lg">
                                            <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                <div class="hs-dropdown-toggle flex flex-col items-center justify-center w-full"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                                    id="departure-dropdown-domestic">
                                                    <input id="r-depairport-domestic" type="hidden" readonly
                                                        value="TIA" />
                                                    <input id="r-depcity-domestic" type="hidden" readonly
                                                        value="ktm" />
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        FROM
                                                    </p>
                                                    <div class="text-3xl text-black font-bold uppercase leading-10 boarder-0"
                                                        id="display-depairport-domestic"></div>
                                                    <div class="text-xs text-black font-semibold uppercase overflow-hidden text-ellipsis"
                                                        id="display-depcity-domestic"></div>
                                                </div>
                                                <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="departure-dropdown-domestic">
                                                    <div class="w-full flex justify-between items-center">
                                                        <h4>Flying From</h4>
                                                        <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                    <div class="relative mt-2">
                                                        <input type="text"
                                                            class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                            placeholder="Search Airports, Cities" />
                                                        <div
                                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path
                                                                        d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path
                                                                        d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="r-swipesector absolute top-7 -right-7 border border-primary"
                                            id="r-swapinput-domestic"></div>
                                    </div>
                                    <div class="r-to-domestic">
                                        <div class="border border-primary px-2 py-3 rounded-lg">
                                            <div class="hs-dropdown relative inline-flex [--auto-close:inside] w-full">
                                                <div class="hs-dropdown-toggle flex flex-col items-center justify-center w-full"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                                    id="return-dropdown-domestic">
                                                    <input id="r-arrairport-domestic" type="hidden" readonly
                                                        value="PA" />
                                                    <input id="r-arrcity-domestic" type="hidden" readonly
                                                        value="Pokhara" />
                                                    <p class="text-xs text-gray-400 font-medium capitalize">
                                                        TO
                                                    </p>
                                                    <div class="text-3xl text-black font-bold uppercase border-0 leading-10"
                                                        id="display-arrairport-domestic"></div>
                                                    <div class="text-xs text-black font-semibold uppercase overflow-hidden text-ellipsis"
                                                        id="display-arrcity-domestic"></div>
                                                </div>
                                                <div class="px-4 py-3 z-50 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-72 bg-white shadow-md rounded-lg mt-2 -top-24"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="return-dropdown-domestic">
                                                    <div class="w-full flex justify-between items-center">
                                                        <h4>Flying To</h4>
                                                        <button
                                                            class="bg-gray-100 p-3 size-4 rounded-full flex items-center justify-center">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                    <div class="relative mt-2">
                                                        <input type="text"
                                                            class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                            placeholder="Search Airports, Cities" />
                                                        <div
                                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path
                                                                        d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path
                                                                        d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                                        stroke="#929292" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-dep-domestic">
                                        <div
                                            class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Departure Date
                                            </p>
                                            <div class="relative">
                                                <input type="text" id="r-depdate-domestic"
                                                    class="peer pe-2 pt-2 pb-2 ps-8 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                    placeholder="mm/dd/yyyy" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                    <svg width="25px" height="25px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                                stroke="#929292" stroke-width="1"
                                                                stroke-linecap="round">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-return-domestic" style="opacity: 0.4">
                                        <div
                                            class="relative border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Return Date
                                            </p>
                                            <div class="relative">
                                                <input type="text" id="r-returndate-domestic"
                                                    class="peer pe-2 pt-2 pb-2 ps-8 block w-full bg-transparent border-0 text-base text-black font-semibold disabled:opacity-50 disabled:pointer-events-none tracking-wide focus:shadow-none focus:ring-0"
                                                    placeholder="mm/dd/yyyy" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                    <svg width="25px" height="25px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                                stroke="#929292" stroke-width="1"
                                                                stroke-linecap="round">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="absolute top-2 right-2 bg-gray-100 p-2 size-1 rounded-full flex items-center justify-center"
                                                id="returnCross-domestic">
                                                <i class="fa-solid fa-xmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-travellers-domestic">
                                        <div
                                            class="relative border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Traveller(s)
                                            </p>
                                            <!-- Travellers Count  -->
                                            <div class="travellers-count">
                                                <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                                    aria-controls="domestic-travellers-drop"
                                                    data-hs-overlay="#domestic-travellers-drop"
                                                    class="py-1 text-sm text-black font-semibold">
                                                    Travellers
                                                </button>
                                                <div id="domestic-travellers-drop"
                                                    class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform max-h-[32rem] size-full z-[80] bg-white border-b hidden"
                                                    role="dialog" tabindex="-1"
                                                    aria-labelledby="hs-offcanvas-bottom-label">
                                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                                        <h3 id="hs-offcanvas-bottom-label"
                                                            class="font-medium text-lg text-gray-800">
                                                            No. of Travellers
                                                        </h3>
                                                        <!-- <button
                                                      type="button"
                                                      class="size-8 inline-flex justify-center text-lg text-primary items-center gap-x-2 border border-transparent hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                      aria-label="Close"
                                                      data-hs-overlay="#hs-offcanvas-bottom"
                                                    >
                                                      Done
                                                    </button> -->
                                                    </div>
                                                    <!-- No of Travellers Select  -->
                                                    <div class="p-4">
                                                        <!-- Adult Travellers  -->
                                                        <div class="adult-travellers">
                                                            <label class="" for="adultcount">
                                                                <span class="font-semibold">Adults</span> (12+
                                                                yrs)</label>
                                                            <div class="flex gap-2 mt-2">
                                                                <label for="adult-1"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-1" />
                                                                    <span class="text-sm">1</span>
                                                                </label>

                                                                <label for="adult-2"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-2" />
                                                                    <span class="text-sm">2</span>
                                                                </label>

                                                                <label for="adult-3"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-3" />
                                                                    <span class="text-sm">3</span>
                                                                </label>
                                                                <label for="adult-4"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-4" />
                                                                    <span class="text-sm">4</span>
                                                                </label>
                                                                <label for="adult-5"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-5" />
                                                                    <span class="text-sm">5</span>
                                                                </label>
                                                                <label for="adult-6"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-6" />
                                                                    <span class="text-sm">6</span>
                                                                </label>
                                                                <label for="adult-7"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-7" />
                                                                    <span class="text-sm">7</span>
                                                                </label>
                                                                <label for="adult-8"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-8" />
                                                                    <span class="text-sm">8</span>
                                                                </label>
                                                                <label for="adult-9"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-adults"
                                                                        class="hidden" id="adult-9" />
                                                                    <span class="text-sm">9</span>
                                                                </label>
                                                            </div>
                                                            <input name="adultcount" id="adultcount" type="hidden" />
                                                        </div>
                                                        <!-- / Adult Travellers  -->

                                                        <!-- Children Travellers -->
                                                        <div class="children-travellers mt-6">
                                                            <label class="" for="childrencount">
                                                                <span class="font-semibold">Children</span>
                                                                (2-12 yrs)</label>
                                                            <div class="flex gap-2 mt-2">
                                                                <label for="children-0"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-0" />
                                                                    <span class="text-sm">0</span>
                                                                </label>
                                                                <label for="children-1"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-1" />
                                                                    <span class="text-sm">1</span>
                                                                </label>

                                                                <label for="children-2"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-2" />
                                                                    <span class="text-sm">2</span>
                                                                </label>

                                                                <label for="children-3"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-3" />
                                                                    <span class="text-sm">3</span>
                                                                </label>
                                                                <label for="children-4"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-4" />
                                                                    <span class="text-sm">4</span>
                                                                </label>
                                                                <label for="children-5"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-5" />
                                                                    <span class="text-sm">5</span>
                                                                </label>
                                                                <label for="children-6"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-6" />
                                                                    <span class="text-sm">6</span>
                                                                </label>
                                                                <label for="children-7"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-7" />
                                                                    <span class="text-sm">7</span>
                                                                </label>
                                                                <label for="children-8"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-children"
                                                                        class="hidden" id="children-8" />
                                                                    <span class="text-sm">8</span>
                                                                </label>
                                                            </div>
                                                            <input name="childrencount" id="childrencount"
                                                                type="hidden" />
                                                        </div>
                                                        <!-- / Children Travellers -->

                                                        <!-- Infant Travellers  -->
                                                        <div class="infant-travellers mt-6">
                                                            <label class="" for="infantcount">
                                                                <span class="font-semibold">Infant</span> (0-2
                                                                yrs)</label>
                                                            <div class="flex gap-2 mt-2">
                                                                <label for="infant-0"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-0" />
                                                                    <span class="text-sm">0</span>
                                                                </label>
                                                                <label for="infant-1"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-1" />
                                                                    <span class="text-sm">1</span>
                                                                </label>
                                                                <label for="infant-2"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-2" />
                                                                    <span class="text-sm">2</span>
                                                                </label>
                                                                <label for="infant-3"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-3" />
                                                                    <span class="text-sm">3</span>
                                                                </label>
                                                                <label for="infant-4"
                                                                    class="flex justify-center items-center w-full p-2 bg-white border border-gray-200 rounded-sm text-sm has-[:checked]:text-white has-[:checked]:bg-primary">
                                                                    <input type="radio" name="no-infant"
                                                                        class="hidden" id="infant-4" />
                                                                    <span class="text-sm">4</span>
                                                                </label>
                                                            </div>
                                                            <input name="infantcount" id="infantcount"
                                                                type="hidden" />
                                                        </div>
                                                        <!-- / Infant Travellers  -->
                                                        <!-- Nationality  -->

                                                        <div class="nationality mt-6">
                                                            <label for="">
                                                                <span class="font-semibold">Nationality</span></label>

                                                            <select
                                                                data-hs-select='{
                                  "placeholder": "Select Nationality...",
                                  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500",
                                  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }'
                                                                class="hidden">
                                                                <option>Nepal</option>
                                                                <option>India</option>
                                                                <option>China</option>
                                                            </select>
                                                        </div>

                                                        <!-- / Nationality  -->

                                                        <div
                                                            class="py-1 px-2 rounded text-base font-medium mt-6 bg-primary-lighter">
                                                            For 10 Passengers or above kindly send the email
                                                            on
                                                            <span class="text-primary">flights@flights.com</span>
                                                        </div>
                                                    </div>
                                                    <!-- / No of Travellers Select  -->
                                                </div>
                                            </div>
                                            <!-- / Travellers Count  -->
                                        </div>
                                    </div>
                                    <div class="r-class-domestic">
                                        <div
                                            class="border border-primary px-2 py-3 rounded-lg flex flex-col items-start justify-center">
                                            <p class="text-xs text-gray-400 font-medium capitalize">
                                                Class
                                            </p>

                                            <div class="w-full">
                                                <select
                                                    data-hs-select='{
"toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
"toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-1 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white rounded-lg text-start text-sm text-black font-semibold",
"dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 rounded-lg overflow-hidden overflow-y-auto bg-white m-w-fit",
"optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg m-w-fit text-sm text-black font-semibold",
"optionTemplate": "<div class=\"flex justify-between items-center w-full m-w-fit\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
"extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}'
                                                    class="hidden">
                                                    <option>Economy</option>
                                                    <option>Premium Economy</option>
                                                    <option>Business</option>
                                                    <option>First Class</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-search-domestic col-span-2">
                                        <button class="bg-primary w-full py-3 text-white rounded-3xl">
                                            SEARCH
                                        </button>
                                    </div>
                                </div>
                                <!-- / Domestic One / Two Way  -->
                            </div>
                            <!-- / Domestic Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Responsive SearchBox  -->

        <!-- Flyer Slider  -->
        <div class="flyer mt-4 md:mt-12">
            <div class="container mx-auto">
                <div class="flyer-slider">
                    <div>
                        <a href="">
                            <img class="object-cover w-full h-60 md:h-[217px]"
                                src="https://images.pexels.com/photos/587063/pexels-photo-587063.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" />
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img class="object-cover w-full h-60 md:h-[217px]"
                                src="https://images.pexels.com/photos/210199/pexels-photo-210199.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Flyer Slider  -->
    @endsection
