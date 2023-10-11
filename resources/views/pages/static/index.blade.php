@extends('layouts.main')
@section('page-title', 'Home')

{{-- Page Meta Keywords --}}
@section('page-meta-keywords')
    best travel agency in bali, bali holiday rentals, one stop travel platform
@endsection

{{-- Page Meta Description --}}
@section('page-meta-description')
    Discover the enchanting beauty of Bali with our premier travel agency. Immerse yourself in a tropical paradise as we
    curate unforgettable experiences tailored to your preferences. From serene beaches to ancient temples, let us guide you
    through the captivating landscapes and rich cultural heritage of Bali. Start your journey today and create lifelong
    memories with our expert team of travel enthusiasts.
@endsection

{{-- Additional CSS for specific page --}}
@section('additional-css')
@endsection

@section('page-header')
    <header class="pb-10 h-auto md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-center tracking-tight"
        style="
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1564359166390-3a2ddf09543e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1176&q=80');
        background-size:cover;
        background-position:center;
    ">
        <div class="max-w-full md:max-w-3xl lg:max-w-5xl px-2 space-y-[24px]">
            <div>
                <h1 class="text-base font-normal md:text-xl text-gray-400">Welcome to BVR Bali Holiday Rentals</h1>
                <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">Your One Stop Travel Platform</h2>
            </div>
            <div class="flex space-x-[16px]">
                <a href="/properties"
                    class="text-white text-center text-sm bg-gradient-to-r from-sky-500 to-blue-500 p-3 block w-fit rounded-lg">Our
                    Selected Properties</a>
                <a href="/activities" class="text-white text-center text-sm block w-fit p-3">Find Fun Activities</a>
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
                        class="bg-blue-600 rounded-lg text-white w-full md:w-fit lg:w-full px-6 py-[14px] flex justify-center col-span-2 md:col-span-1  lg:col-span-2">
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
    <main class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <section class="space-y-[32px]">
            <div class="space-y-[20px]">
                <h3 class="leading-tight text-3xl font-extrabold tracking-tight text-gray-900">
                    Hold on, we have so many good places to stay over!
                </h3>
                <p class="text-gray-500">
                    @php
                        $total_property = count($all_properties);
                    @endphp
                    BVR Bali Holiday Rentals has carefully selected only the best properties to enhance your stay in
                    Indonesia. Let's choose yours!
                </p>
                <a href="/properties" class="text-blue-600 flex items-center space-x-[4px]">
                    Let me choose!
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-3 gap-5">
{{--                @foreach ($properties as $property)--}}
{{--                    @if ($property->images != '')--}}
{{--                         Extract first picture and store it in a variable--}}
{{--                        @php--}}
{{--                            $value = $property->images;--}}

{{--                            // Remove the array symbol and the quotes--}}
{{--                            $value = str_replace(['"'], '', $value);--}}

{{--                            // Split the string into an array using the comma as delimiter--}}
{{--                            $images = explode(',', $value);--}}

{{--                            $single_image = $images[2];--}}

{{--                            $total_images = count($images);--}}

{{--                            // You can now access each image path using a loop or by index--}}

{{--                        @endphp--}}
{{--                        <div class="col-span-3 md:col-span-1 border bg-white">--}}
{{--                            <img src="{{ asset('storage/' . $single_image) }}"--}}
{{--                                class="h-44 w-full overflow-hidden object-cover" alt="{{ $property->name }}">--}}
{{--                            <div class="font-semibold mt-4  px-5 pb-5">--}}
{{--                                {{ $property->name }}--}}
{{--                                <div class="font-normal text-gray-600">--}}
{{--                                    <a class="text-blue-800"--}}
{{--                                        href="areas/{{ Str::lower($property->location) }}">{{ $property->location }}</a>,--}}
{{--                                    Indonesia--}}
{{--                                </div>--}}
{{--                                <a href="/properties/{{ $property->slug }}" class="block font-medium text-blue-600">View--}}
{{--                                    More Details</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
            </div>
        </section>
        <section class="space-y-[32px]">
            <div class="space-y-[20px]">
                <h3 class="leading-tight text-3xl font-extrabold tracking-tight text-gray-900">
                    Why not explore something while you stay?
                </h3>
                <p class="text-gray-500">
                    There will always be somewhere to stay and something to do to complete your holiday. And we can't deny,
                    what you explore during your holiday will provide you with lasting memories when you return home. So,
                    let's discover the activities that suit you!
                </p>
                <a href="/activities" class="text-blue-600 flex items-center space-x-[4px]">
                    I'm In!
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-5">
                @foreach ($activities as $activity)
                    @php
                        $activity_image = $activity->images;
                        $activity_image = str_replace('"', '', $activity_image);
                    @endphp

                    <a href="/activities/{{ $activity->slug }}"
                        class="col-span-2 flex items-center md:col-span-1 p-5 lg:p-12 bg-center bg-cover"
                        style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/storage/{{ $activity_image }}');
                background-size: cover;
                background-position:center;">
                        <div class="text-white font-medium text-lg">
                            {{ $activity->name }}
                            <div class="text-base font-normal">
                                @if ($activity->price != '0')
                                    <div class="text-gray-300">
                                        Starts from
                                    </div>
                                    <div>
                                        IDR
                                        {{ number_format($activity->price) }}
                                    </div>
                                @else
                                    Contact for more details
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        <section class="space-y-[32px]">
            <div class="space-y-[20px]">
                <h3 class="leading-tight text-3xl font-extrabold tracking-tight text-gray-900">
                    Still wondering? Let’s find out the best destination that suit you!
                </h3>
                <p class="text-gray-500">
                    Indeed, Indonesia is an archipelago country with numerous islands stretching from west to east. However,
                    Bali consistently remains one of the best destinations that will always be our favorite. Speaking of
                    which, let's discover the best suit areas to vacation!
                </p>
                <a href="/areas" class="text-blue-600 flex items-center space-x-[4px]">
                    Let me know!
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-12 w-full gap-y-4 mt-4">
                @foreach ($areas as $area)
                    <a href="/areas/{{ Strtolower($area->location) }}"
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
                <h5 class="mb-2 text-2xl md:text-3xl font-bold text-white">WHY RENTING when you can buy your dream
                    property?</h5>
                <p class="mb-5 text-base sm:text-lg text-gray-200"></p>
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="https://bvrproperty.com" target="_blank"
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
