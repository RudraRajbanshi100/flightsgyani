<header class="flex flex-wrap sm:justify-start w-full md:z-50 text-sm">
    <nav class="container navbar w-full bg-white rounded-xl mx-auto px-4 py-3 flex items-center justify-between">
        <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="./index.html"
            aria-label="Brand">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="" width="100px" height="60px" /></a>
        <div class="flex gap-3">
            <div class="gap-5 items-center hidden sm:flex">
                <a class="nav-item" href="#">Home</a>
                <a class="nav-item" href="#">About Us</a>
                <a class="nav-item" href="#">Flights</a>
                <a class="nav-item" href="#">Blog</a>
                <a class="nav-item" href="#">Contact</a>
            </div>
            <div class="flex flex-row items-center justify-end mt-0">
                <button type="button"
                    class="py-3 px-8 hidden md:inline-flex items-center gap-x-2 text-sm font-semibold tracking-wider rounded-lg focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                    Sign In
                </button>
                <button type="button"
                    class="py-3 px-8 hidden md:inline-flex items-center gap-x-2 text-sm font-semibold tracking-wider rounded-lg g-button-primary text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                    Sign Up
                </button>

                <button type="button"
                    class="m-1 ms-0 py-3 px-4 md:hidden inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right"
                    data-hs-overlay="#hs-offcanvas-right">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
            <div id="hs-offcanvas-right"
                class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-56 w-full z-20 bg-white border-s"
                role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800">
                        Flights Gyani
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <div class="gap-5 flex flex-col">
                        <a class="nav-item" href="#">Home</a>
                        <a class="nav-item" href="#">About Us</a>
                        <a class="nav-item" href="#">Flights</a>
                        <a class="nav-item" href="#">Blogs</a>
                        <a class="nav-item" href="#">Contact</a>
                        <button type="button"
                            class="py-3 px-8 md:inline-flex items-center gap-x-2 text-sm font-semibold tracking-wider rounded-lg g-button-primary text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-non">
                            Sign In
                        </button>
                        <button type="button"
                            class="py-3 px-8 md:inline-flex items-center gap-x-2 text-sm font-semibold tracking-wider rounded-lg g-button-primary text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
