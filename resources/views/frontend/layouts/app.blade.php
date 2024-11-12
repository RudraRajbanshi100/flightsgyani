<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/output.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <title>FlightsGyani Airlines</title>
</head>

<body>
    <div id="main_content">
        @include('frontend.layouts.homeheader')
        @yield('content')
        @include('frontend.layouts.footer')
    </div>

    {{-- loader --}}
    <div id="loader_screen" class="hidden">
        <div class="h-screen w-screen flex items-center justify-center">
            <div class="loading">
                <div class="loading-header flex flex-col justify-center items-center gap-4">
                    <img src="{{ asset('frontend/images/search-loader.gif') }}" class="max-w-[200px]" alt="" />
                    <div class="border-b-2 border-secondary flex">
                        <div class="px-6 py-3 text-base bg-secondary text-white">
                            Searching Flights
                        </div>
                        <div class="px-6 py-3 text-base">Please Wait</div>
                    </div>
                </div>
                <div class="loading-body mt-3">
                    <div class="flex flex-col gap-4 items-center justify center">
                        <div class="searching-for text-lg">
                            Searching For: <span class="text-secondary uppercase">KTM</span>
                            <i class="fa-solid fa-plane px-2"></i>
                            <span class="text-secondary uppercase">pkr</span>
                            <span class="font-medium"> for Feb 20, 2024 || 1 Adult </span>
                        </div>
                        <div class="flyer max-w-[600px] max-h-[400px] object-cover overflow-hidden">
                            <img src="{{ asset('frontend/images/flyer1.jpg') }}" alt="" class="h-full w-full" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/node_modules/preline/dist/preline.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('frontend/js/datepicker.js') }}"></script>
    <script src="{{ asset('frontend/js/flightsearch.js') }}"></script>
    <script src="{{ asset('frontend/js/responsive-flightsearch.js') }}"></script>
    <script src="{{ asset('frontend/js/slider.js') }}"></script>

    <script>
        $(document).on('click', '.btn_search', function(e) {
            $('#main_content').hide();
            $('#loader_screen').show();
        })
    </script>

    @yield('scripts')
</body>

</html>
