@foreach ($flights->Outbound->Availability as $flight)
    <div class="detail-wrap transition">
        <div class="hs-accordion-group">
            <div class="hs-accordion" id="hs-basic-no-arrow-heading-two">
                <div class="grid grid-cols-12 px-4 gap-1">
                    <div class="col-span-1">
                        <div class="logo-sec">
                            <img src="{{ $flight->AirlineLogo }}" alt="" />
                            <span class="title">BDT 4,271</span>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="airport-part">
                            <div class="airport-name min-w-fit">
                                <h4 class="city-name">{{ $flight->Departure }}</h4>
                                <h4 class="date">Tue, Aug 1, 2024</h4>
                                <h3 class="time">{{ $flight->DepartureTime }}</h3>
                            </div>
                            <div class="airport-progress">
                                <i class="fa-solid fa-circle text-secondary float-start"></i>
                                <i class="fa-solid fa-circle text-secondary float-end"></i>
                                <div class="stop-time">30h 20m</div>
                                <div class="stop">(1 stop)</div>
                            </div>
                            <div class="airport-name arrival min-w-fit">
                                <h4 class="city-name">{{ $flight->Arrival }}</h4>
                                <h4 class="date">Nov 27. Mon</h4>
                                <h3 class="time">{{ $flight->ArrivalTime }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="price">
                            <div>
                                <h4 class="cost">Rs 1200</h4>
                                <span class="status">non refundable</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="book-flight">
                            <button type="button" class="g-button-primary">
                                Book Now
                            </button>
                        </div>
                        <div class="flight-details">
                            <!-- <button type="button">Flight Details</button> -->
                            <button
                                class="hs-accordion-toggle g-button-primary focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none"
                                aria-expanded="false" aria-controls="hs-basic-no-arrow-collapse-two">
                                Flights Details
                            </button>
                        </div>
                    </div>
                </div>
                <div id="hs-basic-no-arrow-collapse-two"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-4 py-3"
                    role="region" aria-labelledby="hs-basic-no-arrow-heading-two">
                    <div class="flex">
                        <div class="flex bg-white rounded-sm transition py-1 px-2">
                            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                <button type="button"
                                    class="hs-tab-active:bg-secondary hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2 px-5 inline-flex items-center gap-x-2 bg-transparent text-base text-gray-500 font-medium tracking-widest hover:text-gray-700 focus:outline-none focus:text-gray-700 rounded-sm hover:hover:text-primary disabled:opacity-50 disabled:pointer-events-none active"
                                    id="segment-item-1" aria-selected="true" data-hs-tab="#detail-drop-flights"
                                    aria-controls="detail-drop-flights" role="tab">
                                    Flights
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-secondary hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2 px-5 inline-flex items-center gap-x-2 bg-transparent text-base text-gray-500 font-medium tracking-widest hover:text-gray-700 focus:outline-none focus:text-gray-700 rounded-sm hover:hover:text-primary disabled:opacity-50 disabled:pointer-events-none"
                                    id="segment-item-2" aria-selected="false" data-hs-tab="#detail-drop-penalty"
                                    aria-controls="detail-drop-penalty" role="tab">
                                    Penalty
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-secondary hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2 px-5 inline-flex items-center gap-x-2 bg-transparent text-base text-gray-500 font-medium tracking-widest hover:text-gray-700 focus:outline-none focus:text-gray-700 rounded-sm hover:hover:text-primary disabled:opacity-50 disabled:pointer-events-none"
                                    id="segment-item-2" aria-selected="false" data-hs-tab="#detail-drop-pricing"
                                    aria-controls="detail-drop-pricing" role="tab">
                                    Pricing
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-secondary hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2 px-5 inline-flex items-center gap-x-2 bg-transparent text-base text-gray-500 font-medium tracking-widest hover:text-gray-700 focus:outline-none focus:text-gray-700 rounded-sm hover:hover:text-primary disabled:opacity-50 disabled:pointer-events-none"
                                    id="segment-item-3" aria-selected="false" data-hs-tab="#detail-drop-baggage"
                                    aria-controls="detail-drop-baggage" role="tab">
                                    Baggage
                                </button>
                            </nav>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div id="detail-drop-flights" role="tabpanel" aria-labelledby="segment-item-1">
                            <div class="detail-flights">
                                <div class="detail-flights-head">
                                    <div class="flex items-center justify-center gap-3">
                                        <i class="fa-solid fa-plane-departure text-white"></i>
                                        <p class="place">KTM</p>
                                        <i class="fa-solid fa-minus text-white"></i>

                                        <p class="place">DEL</p>
                                        <i class="fa-solid fa-plane-arrival text-white"></i>
                                    </div>
                                </div>
                                <div class="detail-flights-body">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-2">
                                            <div class="transit-flight">
                                                <div class="logo-sec">
                                                    <img src="./../../public/images/emirates.png" alt="" />
                                                    <span class="title">BDT 4,271</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-10">
                                            <div class="airport-part">
                                                <div class="airport-name min-w-fit">
                                                    <h3 class="text-2xl text-start font-semibold">
                                                        17:00
                                                    </h3>
                                                    <h4
                                                        class="text-base uppercase font-semibold text-start text-gray-400">
                                                        Delhi, T3
                                                    </h4>
                                                    <h4 class="text-sm font-medium text-gray-400 text-start">
                                                        Delhi Airport
                                                    </h4>
                                                    <h4 class="text-xs font-medium text-gray-400 text-start">
                                                        Tue, Aug 1, 2024
                                                    </h4>
                                                </div>

                                                <div class="airport-progress-drop">
                                                    <i class="fa-solid fa-plane text-primary float-start"></i>
                                                </div>
                                                <div class="relative min-w-fit">
                                                    <div class="w-full text-gray-400 font-medium mb-1">
                                                        30h 20m
                                                    </div>
                                                    <div class="w-full text-gray-400 font-medium mt-1">
                                                        (1 stop)
                                                    </div>
                                                </div>
                                                <div class="airport-progress-drop">
                                                    <i
                                                        class="fa-solid fa-angle-right text-primary float-end text-base"></i>
                                                </div>
                                                <div class="airport-name arrival min-w-fit">
                                                    <h3 class="text-2xl text-start font-semibold">
                                                        17:00
                                                    </h3>
                                                    <h4
                                                        class="text-base uppercase font-semibold text-start text-gray-400">
                                                        Kathmandu
                                                    </h4>
                                                    <h4 class="text-sm font-medium text-gray-400 text-start">
                                                        Tribhuwan International Airport
                                                    </h4>
                                                    <h4 class="text-xs font-medium text-gray-400 text-start">
                                                        Tue, Aug 1, 2024
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="detail-drop-penalty" class="hidden" role="tabpanel"
                            aria-labelledby="segment-item-2">
                            <div class="flights-drop-table">
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="border rounded-lg overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pax Type</th>
                                                            <th scope="col">Penalty On</th>
                                                            <th scope="col">Applicability</th>
                                                            <th scope="col">Availability</th>
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
                        </div>
                        <div id="detail-drop-pricing" class="hidden" role="tabpanel"
                            aria-labelledby="segment-item-3">
                            <div class="flights-drop-table">
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="border rounded-lg overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Price Title</th>
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
                        </div>
                        <div id="detail-drop-baggage" class="hidden" role="tabpanel"
                            aria-labelledby="segment-item-4">
                            <div class="flights-drop-table">
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="border rounded-lg overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Checking Bags</th>
                                                            <th scope="col">Hand Carry Bags</th>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
