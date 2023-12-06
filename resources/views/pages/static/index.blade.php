@extends('layouts.main')
@section('page-title', 'Bali Holiday at Your Fingertips | BVR Bali Holiday Rentals')

@section('additional-style')
@endsection

{{-- Page Meta Keywords --}}
@section('page-meta-keywords', 'travel booking platforms | vacation rentals | bali tour operators | bali tour agency | villa rentals | best hotels in bali | vacation bali | bali hotels and resorts | bali resort | travel agent seminyak | bali vacation rentals | bali villa rentals | travel agency bali | hotel booking platforms | villa bali | bali vacation trip | best hotel booking platform | bali beach rentals')


{{-- Page Meta Description --}}
@section('page-meta-description', 'Experiencing paradise vibes never gets easier. With BVR Bali Holiday Rentals, make your Bali holiday perfect, at your fingertips!')

{{-- Additional CSS for specific page --}}
@section('additional-css')
@endsection

@section('page-header')
    <header itemscope itemtype="https://www.bvrbaliholidayrentals.com" class="relative pb-10 h-auto md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-center tracking-tight">
        <div class="absolute inset-0 overflow-hidden">
            <video class="h-screen w-full object-cover " autoplay loop muted itemprop="holiday in bali">
                <source src="https://bvrbaliholidayrentals.com/videos/index-header.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <div class="relative max-w-full md:max-w-3xl lg:max-w-5xl px-2 space-y-[24px]">
            <div>
                <h1 class="text-base font-normal md:text-xl text-gray-400" itemprop="title">Welcome to BVR Bali Holiday Rentals</h1>
                <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">Your One Stop Travel Platform</h2>
            </div>
            <div class="flex space-x-[16px]">
                <a href="/properties" class="text-white text-center text-sm bg-[#ff5700] to-blue-500 p-3 block w-fit rounded-lg" title="Our Selected Properties">Our Selected Properties</a>
                <a href="/activities" class="text-white text-center text-sm block w-fit p-3" title="Find Fun Activities">Find Fun Activities</a>
            </div>
            <div class="bg-white p-[10px] rounded-lg">
                <form method="GET" action="/properties/search" class="grid grid-cols-2 lg:grid-cols-12 gap-[16px]">
                    <div class="relative col-span-2 md:col-span-2 lg:col-span-10">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-gray-400">
                                <path fill-rule="evenodd"
                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" name="search" id="email-address-icon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Where to">
                    </div>
                    <button
                        class="bg-[#ff5700] rounded-lg text-white w-full md:w-fit lg:w-full px-6 py-[14px] flex justify-center col-span-2 md:col-span-1  lg:col-span-2">
                        <div class="flex items-center space-x-[8px]">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                Search
                            </div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </header>
@endsection

@section('page-content')
    <main itemscope class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <section class="space-y-[32px]">
            <div class="space-y-[20px]">
                <h3 class="leading-tight text-3xl font-extrabold tracking-tight text-gray-900" itemprop="title">
                    Bali Hotel, Resort & Villa Rentals
                </h3>
                <p class="text-gray-500" itemprop="description">
                    @php
                        $total_property = count($all_properties);
                    @endphp
                    We serve you villa, resort, and hotel for your convenience in Bali - the Land of Gods.
                </p>
                <a href="/properties" class="text-blue-600 flex items-center space-x-[4px]" title="See more" itemprop="detail">
                    See more
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-3 gap-5">
                @foreach ($properties as $property)
                    @php
                        $value = $property->images;

                        // Remove the array symbol and the quotes
                        $value = str_replace(['"'], '', $value);

                        // Split the string into an array using the comma as delimiter
                        $images = explode(',', $value);

                        $single_image = $images[0];

                        $total_images = count($images);

                        $header_value = $property->header_images;

                        $header_value = str_replace(['"'], '', $header_value);

                        $single_header = explode(',', $header_value);

                        $single_header = $single_header[0];

                        // You can now access each image path using a loop or by index

                    @endphp
                    <div class="col-span-3 md:col-span-1 border bg-white">

                        @if ($property->header_images)
                            <img src="{{ asset('storage/' . $single_header) }}"
                                class="h-44 w-full overflow-hidden object-cover" alt="Header Images">
                        @else
                            <img src="{{ asset('storage/' . $single_image) }}"
                                class="h-44 w-full overflow-hidden object-cover" alt="Ex Images">
                        @endif
                        <div class="font-semibold mt-4  px-5 pb-5">
                            {{ $property->name }}
                            <div class="font-normal text-gray-600">
                                <a class="text-blue-800"
                                    href="areas/{{ Str::lower($property->location) }}">{{ $property->location }}</a>,
                                Indonesia
                            </div>
                            <a href="/properties/{{ $property->slug }}" class="block font-medium text-blue-600">View
                                More Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="space-y-[32px]" itemscope>
            <div class="space-y-[20px]">
                <h3 class="leading-tight text-3xl font-extrabold tracking-tight text-gray-900" itemprop="title">
                    Attractive Places in Bali
                </h3>
                <p class="text-gray-500" itemprop="description">
                    Browse some of best activities and places to go in Canggu, Seminyak, Kuta, Ubud, and any other sought-after places in Bali.
                </p>
                <a href="/activities" class="text-blue-600 flex items-center space-x-[4px]">
                    Bali tourist spots
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($activities as $activity)
                    <a href="/activities/category/{{ $activity->id }}" title="{{ $activity->name}}"
                        class="col-span-2 flex items-center md:col-span-1 p-12 lg:p-12 bg-center bg-cover"
                        style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{asset('storage/' . $activity->images)}}');
                background-size: cover;
                background-position:center;">
                        <div class="text-white font-medium text-lg">
                            {{ $activity->name }}
                            <div class="text-base font-light text-neutral-100">
                                Click for More Details
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        <section class="space-y-[32px]">
            <div class="space-y-[20px]">
                <h3 class="leading-tight text-3xl font-extrabold tracking-tight text-gray-900">
                    Top Destinations in Bali
                </h3>
                <p class="text-gray-500">
                    Make your holiday perfect by finding must visit places in Bali.
                </p>
                <a href="/areas" class="text-blue-600 flex items-center space-x-[4px]" title="Let me know!">
                    Let me know!
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-12 w-full gap-y-4 mt-4">
                @foreach ($areas as $area)
                    <a href="/areas/{{ Strtolower($area->location) }}" title="Location"
                        class="col-span-12 w-full h-44 flex items-center p-5"
                        style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/storage/{{ $area->image }}');
                        background-size:cover;
                        background-position:center;
                        ">
                        <h3 class="text-white text-xl font-semibold">
                            {{ $area->location }}
                        </h3>
                    </a>
                @endforeach
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg drop-shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700"
                style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/images/property-background.jpg'); background-size:cover; background-position:center;">
                <h3 class="mb-2 text-2xl md:text-3xl font-bold text-white">Why Renting When You Can Buy Your Dream
                    Property?</h3>
                <p class="mb-5 text-base sm:text-lg text-gray-200"></p>
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="https://bvrproperty.com" target="_blank" title="Go To Website"
                        class="w-full md:w-1/4 bg-white focus:ring-1 focus:outline-none focus:ring-gray-300 text-[#ff5700]  hover:bg-black/50 hover:backdrop-blur-sm transition ease-in-out duration-300 rounded-lg inline-flex items-center justify-center px-4 py-2.5 ">
                        <div class="text-left">
                            <div class="mb-1 text-xs">Visit BVR Property</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Go To Website</div>
                        </div>
                    </a>
                </div>
            </div>


        </section>
    </main>
@endsection

@section('additional-scripts')

@endsection
