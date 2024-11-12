@extends('frontend.layouts.inner.app')
@section('content')
    <!-- Filters Tab  -->
    <div class="filters-tab hidden md:block">
        <div class="container mx-auto">
            <div class="drop-shadow-md bg-secondary-lighter px-4 w-full rounded-md py-4 mt-3 grid grid-cols-6 gap-3">
                <div class="col-span-3 md:col-span-1">
                    <label for="input-label" class="block text-sm font-medium mb-2">From</label>
                    <div class="relative">
                        <input type="text" id="filter-from" name="filter-from"
                            class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="KTM" />
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="input-label" class="block text-sm font-medium mb-2">To</label>
                    <div class="relative">
                        <input type="text" id="filter-to" name="filter-to"
                            class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="PKR" />
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="input-label" class="block text-sm font-medium mb-2">Departure Date</label>
                    <div class="relative">
                        <input type="text" id="filter-dep" name="filter-dep"
                            class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="2024/08/21" />
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M3 9H21M7 3V5M17 3V5M6 12H10V16H6V12ZM6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="input-label" class="block text-sm font-medium mb-2">Return Date</label>
                    <div class="relative">
                        <input type="text" id="filter-return" name="filter-return"
                            class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="2024/08/21" />
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M3 9H21M7 3V5M17 3V5M6 12H10V16H6V12ZM6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="input-label" class="block text-sm font-medium mb-2">Traveller & Class</label>
                    <div class="relative">
                        <input type="text" id="filter-return" name="filter-return"
                            class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="1 Traveller" />
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex items-baseline col-span-3 md:col-span-1">
                    <button type="button"
                        class="w-full mt-auto py-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent g-button-secondary text-white hover:primary focus:outline-none focus:primary disabled:opacity-50 disabled:pointer-events-none">
                        Modify
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- / Filters Tab  -->

    <!-- Page Content   -->
    <div class="page-content hidden md:block">
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-4 mt-6">
                <div class="filters-sidebar hidden md:block">
                    <div class="drop-shadow-sm bg-secondary-lighter px-4 py-5 rounded-lg">
                        <h4 class="text-xl font-semibold tracking-widest px-5 mb-5 text-secondary">
                            Filters
                        </h4>

                        <div class="hs-accordion-group mb-4">
                            <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                                id="hs-active-bordered-heading-two">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary text-base inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-expanded="true" aria-controls="airlies-collapse">
                                    Airlines
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                </button>
                                <div id="airlies-collapse"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-active-bordered-heading-two">
                                    <div class="pb-4 px-5">
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="airline-one" />
                                            <label for="airline-one" class="text-base text-gray-500 ms-3">Qatar
                                                Airways</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="airline-two" />
                                            <label for="airline-two" class="text-base text-gray-500 ms-3">Singapore
                                                Airways</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="airline-three" />
                                            <label for="airline-three" class="text-base text-gray-500 ms-3">Bippon
                                                Airways</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="airline-four" />
                                            <label for="airline-four"
                                                class="text-base text-gray-500 ms-3">Emirates</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion-group mb-4">
                            <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                                id="hs-active-bordered-heading-two">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-expanded="true" aria-controls="depart-collapse">
                                    Departure Time
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                </button>
                                <div id="depart-collapse"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-active-bordered-heading-two">
                                    <div class="pb-4 px-5">
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="depart-one" />
                                            <label for="depart-one" class="text-base text-gray-500 ms-3">00:00 -
                                                06:00</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="depart-two" />
                                            <label for="depart-two" class="text-base text-gray-500 ms-3">06:00 -
                                                12:00</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="depart-three" />
                                            <label for="depart-three" class="text-base text-gray-500 ms-3">12:00 -
                                                16:00</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="depart-four" />
                                            <label for="depart-four" class="text-base text-gray-500 ms-3">18:00 -
                                                24:00</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion-group mb-4">
                            <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                                id="hs-active-bordered-heading-two">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-expanded="true" aria-controls="arr-collapse">
                                    Arrival Time
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                </button>
                                <div id="arr-collapse"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-active-bordered-heading-two">
                                    <div class="pb-4 px-5">
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="arr-one" />
                                            <label for="arr-one" class="text-base text-gray-500 ms-3">00:00 -
                                                06:00</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="arr-two" />
                                            <label for="arr-two" class="text-base text-gray-500 ms-3">06:00 -
                                                12:00</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="arr-three" />
                                            <label for="arr-three" class="text-base text-gray-500 ms-3">12:00 -
                                                16:00</label>
                                        </div>
                                        <div class="flex py-1">
                                            <input type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                id="arr-four" />
                                            <label for="arr-four" class="text-base text-gray-500 ms-3">18:00 -
                                                24:00</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flight-detail col-span-4 md:col-span-3">
                    <!-- <div class="grid grid-cols-12 py-4 tracking-widest">
                  <div class="col-span-2">
                    <p class="text-center text-sm text-gray-500">Airline</p>
                  </div>
                  <div class="col-span-6">
                    <div class="flex justify-between w-full">
                      <p class="text-center text-sm text-gray-500">Departure</p>
                      <p class="text-center text-sm text-gray-500">Arrival</p>
                    </div>
                  </div>
                  <div class="col-span-2">
                    <p class="text-center text-sm text-gray-500">Price</p>
                  </div>
                </div> -->

                    <div class="day-tracker pb-4">
                        <div class="bg-primary-background px-3 py-2 relative">
                            <div class="slider daytrack px-12">
                                @foreach ($dateRange as $date)
                                <div class="px-2 py-1">
                                    <div class="px-3 py-2 bg-white shadow-md">
                                        <p class="text-xs font-normal text-gray-500">
                                            {{$date->format('M d, Y')}}
                                        </p>
                                        {{-- <h6 class="text-base font-semibold text-gray-600">
                                            Rs 2500
                                        </h6> --}}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="detail-list">
                        @include('frontend.domestic.outbound')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Page Content   -->

    <!-- Responsive Page Content  -->
    <div class="block md:hidden">
        <section class="heading">
            <div class="container mx-auto">
                <div class="bg-primary w-full py-3 text-center flex justify-center items-center gap-3">
                    <i class="fa-solid fa-plane-departure text-white text-xl uppercase"></i>
                    <div class="text-white text-xl uppercase font-medium">ktm</div>
                    <div class="text-white text-xl uppercase font-medium">-</div>
                    <div class="text-white text-xl uppercase font-medium">del</div>
                    <i class="fa-solid fa-plane-arrival text-white text-xl uppercase"></i>
                </div>
            </div>
        </section>

        <section class="modify">
            <div class="container mx-auto">
                <div class="w-full">
                    <div class="hs-accordion-group">
                        <div class="hs-accordion" id="modify-drop">
                            <div class="grid grid-cols-5 bg-primary-background px-2 py-3">
                                <button
                                    class="hs-accordion-toggle col-span-1 order-1 bg-secondary max-w-fit px-4 py-3 text-sm tracking-wider text-white font-medium hs-accordion-active:text-white inline-flex items-center gap-x-3 w-full text-start white focus:outline-none focus:text-white rounded-lg disabled:opacity-50 disabled:pointer-events-none"
                                    aria-expanded="false" aria-controls="modify-accordion">
                                    Modify
                                </button>
                                <!-- modify accordion  -->
                                <div id="modify-accordion"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 order-4 col-span-5"
                                    role="region" aria-labelledby="modify-drop">
                                    <div class="grid grid-cols-2 gap-4 mt-2">
                                        <div class="col-span-1">
                                            <label for="input-label" class="block text-sm font-medium mb-2">From</label>
                                            <div class="relative">
                                                <input type="text" id="filter-from" name="filter-from"
                                                    class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="KTM" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                    <svg class="shrink-0 size-4 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="input-label" class="block text-sm font-medium mb-2">To</label>
                                            <div class="relative">
                                                <input type="text" id="filter-to" name="filter-to"
                                                    class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="PKR" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                    <svg class="shrink-0 size-4 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="input-label" class="block text-sm font-medium mb-2">Departure
                                                Date</label>
                                            <div class="relative">
                                                <input type="text" id="filter-dep" name="filter-dep"
                                                    class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="2024/08/21" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                    <svg class="shrink-0 size-4 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M3 9H21M7 3V5M17 3V5M6 12H10V16H6V12ZM6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="input-label" class="block text-sm font-medium mb-2">Return
                                                Date</label>
                                            <div class="relative">
                                                <input type="text" id="filter-return" name="filter-return"
                                                    class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="2024/08/21" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                    <svg class="shrink-0 size-4 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M3 9H21M7 3V5M17 3V5M6 12H10V16H6V12ZM6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="input-label" class="block text-sm font-medium mb-2">Traveller &
                                                Class</label>
                                            <div class="relative">
                                                <input type="text" id="filter-return" name="filter-return"
                                                    class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="1 Traveller" />
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                    <svg class="shrink-0 size-4 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-baseline col-span-1">
                                            <button type="button"
                                                class="w-full mt-auto py-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent g-button-secondary text-white hover:primary focus:outline-none focus:primary disabled:opacity-50 disabled:pointer-events-none">
                                                Modify
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- / modify accordion  -->
                                <div class="flex items-center gap-1 px-2 order-2 col-span-3">
                                    <div class="min-w-fit">
                                        <div class="px-2 py-2 bg-white shadow-md">
                                            <p class="text-[12px] font-normal text-gray-500">
                                                Aug 1, 2024
                                            </p>
                                            <h6 class="text-sm font-semibold text-gray-600">
                                                Rs 2500
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="min-w-fit">
                                        <div class="px-2 py-2 bg-white shadow-md">
                                            <p class="text-[12px] font-normal text-gray-500">
                                                Aug 2, 2024
                                            </p>
                                            <h6 class="text-sm font-semibold text-gray-600">
                                                Rs 2500
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="min-w-fit">
                                        <div class="px-2 py-2 bg-white shadow-md">
                                            <p class="text-[12px] font-normal text-gray-500">
                                                Aug 3, 2024
                                            </p>
                                            <h6 class="text-sm font-semibold text-gray-600">
                                                Rs 2500
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-3 col-span-1 flex justify-end">
                                    <button type="button"
                                        class=" h-full ms-2 py-3 px-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-secondary text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false" aria-controls="filter-offcanvas"
                                        data-hs-overlay="#filter-offcanvas">
                                        <i class="fa-solid fa-filter"></i>
                                    </button>

                                    <div id="filter-offcanvas"
                                        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s"
                                        role="dialog" tabindex="-1" aria-labelledby="filter-offcanvas-label">
                                        <div class="flex justify-between items-center py-3 px-4 border-b">
                                            <h3 id="filter-offcanvas-label" class="font-bold text-primary text-xl">
                                                Filters
                                            </h3>
                                            <button type="button"
                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-label="Close" data-hs-overlay="#filter-offcanvas">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-4">
                                            <div class="hs-accordion-group mb-4">
                                                <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                                                    id="hs-active-bordered-heading-two">
                                                    <button
                                                        class="hs-accordion-toggle hs-accordion-active:text-primary text-base inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-expanded="true" aria-controls="airlies-collapse">
                                                        Airlines
                                                        <svg class="hs-accordion-active:hidden block size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                        <svg class="hs-accordion-active:block hidden size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="airlies-collapse"
                                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                        role="region" aria-labelledby="hs-active-bordered-heading-two">
                                                        <div class="pb-4 px-5">
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="airline-one" />
                                                                <label for="airline-one"
                                                                    class="text-base text-gray-500 ms-3">Qatar
                                                                    Airways</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="airline-two" />
                                                                <label for="airline-two"
                                                                    class="text-base text-gray-500 ms-3">Singapore
                                                                    Airways</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="airline-three" />
                                                                <label for="airline-three"
                                                                    class="text-base text-gray-500 ms-3">Bippon
                                                                    Airways</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="airline-four" />
                                                                <label for="airline-four"
                                                                    class="text-base text-gray-500 ms-3">Emirates</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion-group mb-4">
                                                <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                                                    id="hs-active-bordered-heading-two">
                                                    <button
                                                        class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-expanded="true" aria-controls="depart-collapse">
                                                        Departure Time
                                                        <svg class="hs-accordion-active:hidden block size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                        <svg class="hs-accordion-active:block hidden size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="depart-collapse"
                                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                        role="region" aria-labelledby="hs-active-bordered-heading-two">
                                                        <div class="pb-4 px-5">
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="depart-one" />
                                                                <label for="depart-one"
                                                                    class="text-base text-gray-500 ms-3">00:00 -
                                                                    06:00</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="depart-two" />
                                                                <label for="depart-two"
                                                                    class="text-base text-gray-500 ms-3">06:00 -
                                                                    12:00</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="depart-three" />
                                                                <label for="depart-three"
                                                                    class="text-base text-gray-500 ms-3">12:00 -
                                                                    16:00</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="depart-four" />
                                                                <label for="depart-four"
                                                                    class="text-base text-gray-500 ms-3">18:00 -
                                                                    24:00</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion-group mb-4">
                                                <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                                                    id="hs-active-bordered-heading-two">
                                                    <button
                                                        class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-expanded="true" aria-controls="arr-collapse">
                                                        Arrival Time
                                                        <svg class="hs-accordion-active:hidden block size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                        <svg class="hs-accordion-active:block hidden size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="arr-collapse"
                                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                        role="region" aria-labelledby="hs-active-bordered-heading-two">
                                                        <div class="pb-4 px-5">
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="arr-one" />
                                                                <label for="arr-one"
                                                                    class="text-base text-gray-500 ms-3">00:00 -
                                                                    06:00</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="arr-two" />
                                                                <label for="arr-two"
                                                                    class="text-base text-gray-500 ms-3">06:00 -
                                                                    12:00</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="arr-three" />
                                                                <label for="arr-three"
                                                                    class="text-base text-gray-500 ms-3">12:00 -
                                                                    16:00</label>
                                                            </div>
                                                            <div class="flex py-1">
                                                                <input type="checkbox"
                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="arr-four" />
                                                                <label for="arr-four"
                                                                    class="text-base text-gray-500 ms-3">18:00 -
                                                                    24:00</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="results mt-3 px-2">
            <div class="container mx-auto">
                <div class="flex flex-col gap-4">
                    <div class="result-card">
                        <div class="bg-primary-background p-3">
                            <div class="flex justify-between items-center">
                                <div class="airline flex items-center gap-2">
                                    <i class="fa-solid fa-plane-departure text-gray-600"></i>
                                    <h6 class="text-base font-medium text-gray-600">
                                        Emirates
                                    </h6>
                                </div>
                                <h4 class="text-base font-semibold leading-5 text-primary">
                                    NPR 2500
                                </h4>
                            </div>
                            <div class="px-2 mt-2 detail-wrap">
                                <div class="bg-white p-2">
                                    <div class="detail-flights">
                                        <div>
                                            <div class="flex items-center airport-part">
                                                <div class="airport-name min-w-fit">
                                                    <h3 class="text-xl text-start font-semibold">
                                                        09:15
                                                    </h3>

                                                    <div
                                                        class="text-[12px] font-medium uppercase text-gray-400 text-start">
                                                        Kathmandu
                                                    </div>
                                                    <div class="text-[10px] font-medium text-gray-400 text-start">
                                                        Tue, Aug 1, 2024
                                                    </div>
                                                </div>
                                                <div
                                                    class="r-airprogress w-full px-2 after:content-[ ] relative after:h-[1px] after:bg-gray-400 after:absolute after:right-0 after:top-2/4 after:w-4/5">
                                                    <i
                                                        class="fa-solid fa-plane text-primary float-start z-10 mt-[1px]"></i>
                                                </div>
                                                <div class="relative min-w-fit">
                                                    <div class="w-full text-gray-400 font-medium mb-1">
                                                        30h 20m
                                                    </div>
                                                    <div class="w-full text-gray-400 font-medium mt-1">
                                                        (1 stop)
                                                    </div>
                                                </div>
                                                <div
                                                    class="r-airprogress w-full px-2 after:content-[ ] relative after:h-[1px] after:bg-gray-400 after:absolute after:left-0 after:top-2/4 after:w-4/5">
                                                    <i
                                                        class="fa-solid fa-angle-right text-primary float-end text-base z-10 mt-[1px]"></i>
                                                </div>
                                                <div class="airport-name arrival min-w-fit">
                                                    <h3 class="text-xl text-start font-semibold">
                                                        11:05
                                                    </h3>

                                                    <h4 class="text-[12px] font-medium uppercase text-gray-400 text-start">
                                                        Pokhara
                                                    </h4>
                                                    <h4 class="text-[10px] font-medium text-gray-400 text-start">
                                                        Tue, Aug 1, 2024
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hs-accordion-group w-full">
                                        <div class="hs-accordion w-full" id="details-drop">
                                            <div class="flex items-start justify-end gap-4 mt-2">
                                                <button
                                                    class="hs-accordion-toggle max-w-fit bg-primary px-4 py-2 text-white rounded-lg"
                                                    aria-expanded="false" aria-controls="details-accordion">
                                                    Details
                                                </button>
                                                <button class="bg-primary px-4 py-2 text-white rounded-lg">
                                                    Book Now
                                                </button>
                                            </div>

                                            <!-- flight details  -->
                                            <div id="details-accordion"
                                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                role="region" aria-labelledby="details-drop">
                                                <div class="gap-3 mt-2">
                                                    <div class="flex">
                                                        <div
                                                            class="flex bg-primary-background hover:bg-primary-background rounded-lg transition p-1">
                                                            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist"
                                                                aria-orientation="horizontal">
                                                                <button type="button"
                                                                    class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active: hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
                                                                    id="details-item-1" aria-selected="true"
                                                                    data-hs-tab="#details-1" aria-controls="details-1"
                                                                    role="tab">
                                                                    Flights
                                                                </button>
                                                                <button type="button"
                                                                    class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active: hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="details-item-2" aria-selected="false"
                                                                    data-hs-tab="#details-2" aria-controls="details-2"
                                                                    role="tab">
                                                                    Penalty
                                                                </button>
                                                                <button type="button"
                                                                    class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active: hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="details-item-3" aria-selected="false"
                                                                    data-hs-tab="#details-3" aria-controls="details-3"
                                                                    role="tab">
                                                                    Pricing
                                                                </button>
                                                                <button type="button"
                                                                    class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active: hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                                                                    id="details-item-4" aria-selected="false"
                                                                    data-hs-tab="#details-4" aria-controls="details-4"
                                                                    role="tab">
                                                                    Pricing
                                                                </button>
                                                            </nav>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3">
                                                        <!-- Flights Tab  -->
                                                        <div id="details-1" role="tabpanel"
                                                            aria-labelledby="details-item-1">
                                                            <div class="rounded-md overflow-hidden">
                                                                <div
                                                                    class="bg-primary w-full py-3 text-center flex justify-center items-center gap-3">
                                                                    <i
                                                                        class="fa-solid fa-plane-departure text-white text-sm uppercase"></i>
                                                                    <div class="text-white text-sm uppercase font-medium">
                                                                        ktm
                                                                    </div>
                                                                    <div class="text-white text-sm uppercase font-medium">
                                                                        -
                                                                    </div>
                                                                    <div class="text-white text-sm uppercase font-medium">
                                                                        del
                                                                    </div>
                                                                    <i
                                                                        class="fa-solid fa-plane-arrival text-white text-sm uppercase"></i>
                                                                </div>
                                                                <div class="detail-flights mt-2 px-2">
                                                                    <div>
                                                                        <div class="flex items-center airport-part">
                                                                            <div class="airport-name min-w-fit">
                                                                                <h3
                                                                                    class="text-xl text-start font-semibold">
                                                                                    09:15
                                                                                </h3>

                                                                                <div
                                                                                    class="text-[12px] font-medium uppercase text-gray-400 text-start">
                                                                                    Kathmandu
                                                                                </div>
                                                                                <div
                                                                                    class="text-[10px] font-medium text-gray-400 text-start">
                                                                                    Tue, Aug 1, 2024
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="r-airprogress w-full px-2 after:content-[ ] relative after:h-[1px] after:bg-gray-400 after:absolute after:right-0 after:top-2/4 after:w-4/5">
                                                                                <i
                                                                                    class="fa-solid fa-plane text-primary float-start z-10 mt-[1px]"></i>
                                                                            </div>
                                                                            <div class="relative min-w-fit">
                                                                                <div
                                                                                    class="w-full text-gray-400 font-medium mb-1">
                                                                                    30h 20m
                                                                                </div>
                                                                                <div
                                                                                    class="w-full text-gray-400 font-medium mt-1">
                                                                                    (1 stop)
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="r-airprogress w-full px-2 after:content-[ ] relative after:h-[1px] after:bg-gray-400 after:absolute after:left-0 after:top-2/4 after:w-4/5">
                                                                                <i
                                                                                    class="fa-solid fa-angle-right text-primary float-end text-base z-10 mt-[1px]"></i>
                                                                            </div>
                                                                            <div class="airport-name arrival min-w-fit">
                                                                                <h3
                                                                                    class="text-xl text-start font-semibold">
                                                                                    11:05
                                                                                </h3>

                                                                                <h4
                                                                                    class="text-[12px] font-medium uppercase text-gray-400 text-start">
                                                                                    Pokhara
                                                                                </h4>
                                                                                <h4
                                                                                    class="text-[10px] font-medium text-gray-400 text-start">
                                                                                    Tue, Aug 1, 2024
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- / Flights Tab  -->

                                                        <!-- Penalty Tab  -->
                                                        <div id="details-2" class="hidden" role="tabpanel"
                                                            aria-labelledby="details-item-2">
                                                            <div class="flex flex-col">
                                                                <div class="-m-1.5 overflow-x-auto">
                                                                    <div
                                                                        class="p-1.5 min-w-full inline-block align-middle">
                                                                        <div class="border rounded-lg overflow-hidden">
                                                                            <table
                                                                                class="min-w-full divide-y divide-gray-200">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Pax Type</th>
                                                                                        <th scope="col">Penalty On</th>
                                                                                        <th scope="col">Applicability
                                                                                        </th>
                                                                                        <th scope="col">Availability
                                                                                        </th>
                                                                                        <th scope="col">
                                                                                            Applicable Charges
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="divide-y divide-gray-200">
                                                                                    <tr>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                                            Pax Type
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            Refund
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            Before Flight
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            Yes
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            NPR 5000
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                                            Pax Type
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            Refund
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            Before Flight
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            Yes
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            NPR 5000
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- / Penalty Tab  -->

                                                        <!-- Pricing Tab  -->
                                                        <div id="details-3" class="hidden" role="tabpanel"
                                                            aria-labelledby="details-item-3">
                                                            <div class="flex flex-col">
                                                                <div class="-m-1.5 overflow-x-auto">
                                                                    <div
                                                                        class="p-1.5 min-w-full inline-block align-middle">
                                                                        <div class="border rounded-lg overflow-hidden">
                                                                            <table
                                                                                class="min-w-full divide-y divide-gray-200">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Price Title
                                                                                        </th>
                                                                                        <th scope="col">Price</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="divide-y divide-gray-200">
                                                                                    <tr>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                                            filler
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            filler
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- / Pricing Tab  -->

                                                        <!-- Baggage Tab  -->
                                                        <div id="details-4" class="hidden" role="tabpanel"
                                                            aria-labelledby="details-item-4">
                                                            <div class="flex flex-col">
                                                                <div class="-m-1.5 overflow-x-auto">
                                                                    <div
                                                                        class="p-1.5 min-w-full inline-block align-middle">
                                                                        <div class="border rounded-lg overflow-hidden">
                                                                            <table
                                                                                class="min-w-full divide-y divide-gray-200">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Checking Bags
                                                                                        </th>
                                                                                        <th scope="col">
                                                                                            Hand Carry Bags
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="divide-y divide-gray-200">
                                                                                    <tr>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                                            50kg
                                                                                        </td>
                                                                                        <td
                                                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                                            45 kg
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- / Baggage Tab  -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- / flight details  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Responsive Page Content  -->
@endsection
