<x-guest-layout>
    <div class="leading-normal tracking-normal text-white gradient">
        <!--Nav-->
        <nav id="header" class="fixed w-full z-30 top-0 text-white">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="pl-4 flex items-center">
                    <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                        <svg class="h-8 fill-current inline" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 99.45" style="enable-background:new 0 0 122.88 99.45" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill-rule: evenodd;
                                    clip-rule: evenodd;
                                }
                            </style>
                            <g>
                                <path class="st0" d="M64.48,0.38h18.42c1.85,0,3.36,1.51,3.36,3.36v14.84H61.12V3.74C61.12,1.89,62.63,0.38,64.48,0.38L64.48,0.38z M86.27,27.65v45.19H61.12V27.65H86.27L86.27,27.65z M86.27,81.92v13.8c0,1.85-1.51,3.36-3.36,3.36H64.48 c-1.85,0-3.36-1.51-3.36-3.36v-13.8H86.27L86.27,81.92z" />
                                <path class="st0" d="M101.09,0.38h18.42c1.85,0,3.36,1.51,3.36,3.36v14.84h-0.02H97.73V3.74C97.73,1.89,99.25,0.38,101.09,0.38 L101.09,0.38z M122.88,27.65v45.19H97.73V27.65h25.13H122.88L122.88,27.65z M122.88,81.92v13.8c0,1.85-1.51,3.36-3.36,3.36h-18.42 c-1.85,0-3.36-1.51-3.36-3.36v-13.8H122.88L122.88,81.92z" />
                                <path class="st0" d="M35.95,0.2l17.31,6.3c1.74,0.63,2.64,2.57,2.01,4.31L50.2,24.75l-23.63-8.6l5.07-13.94 C32.28,0.47,34.22-0.43,35.95,0.2L35.95,0.2z M47.1,33.28L31.65,75.75l-23.63-8.6l15.45-42.46L47.1,33.28L47.1,33.28z M28.55,84.28 l-4.72,12.96c-0.63,1.74-2.57,2.64-4.31,2.01l-17.31-6.3c-1.74-0.63-2.64-2.57-2.01-4.31l4.72-12.96L28.55,84.28L28.55,84.28z" />
                            </g>
                        </svg>
                        {{ config('app.name', 'KCloud') }}
                    </a>
                </div>

                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>

                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        @foreach (config('app.landing_page.menu', []) as $menu_item)
                            <li class="mr-3">
                                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{$menu_item['link']}}">{{$menu_item['label']}}</a>
                            </li>
                        @endforeach

                        @if (Route::has('register'))
                        <li class="mr-3">
                            <a href="{{ route('register') }}" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Register</a>
                        </li>
                        @endif
                    </ul>

                    @if (Route::has('login'))
                    @auth
                    <a href="{{ route('home') }}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Go to app</a>
                    @else
                    <a href="{{ route('login') }}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Login to app</a>
                    @endif
                    @endif

                    <!-- <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Login to app</button> -->
                </div>
            </div>

            <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
        </nav>
        <!--Hero-->
        <div class="pt-24">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <p class="uppercase tracking-loose w-full">{{ config('app.landing_page.heading_1', '') }}</p>
                    <h1 class="my-4 text-5xl font-bold leading-tight">{{ config('app.landing_page.heading_2', '') }}</h1>
                    <p class="leading-normal text-2xl mb-8">{{ config('app.landing_page.heading_3', '') }}</p>
                    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Learn More</button>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-full md:w-4/5 z-50" src="{{ asset('images/hero.png') }}">
                </div>
            </div>
        </div>

        <div class="relative -mt-12 lg:-mt-24">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                    </g>
                </g>
            </svg>
        </div>
    </div>
</x-guest-layout>