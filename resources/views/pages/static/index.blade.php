@extends('layouts.main')

{!!seo($seoData)!!}


@section('page-header')
   <div x-data="{ searchModal: window.innerWidth >= 768 }" x-init="init">
       <header itemscope itemtype="https://www.bvrbaliholidayrentals.com"
               class="relative pb-10 h-screen md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-center tracking-tight">
           <div class="absolute inset-0 overflow-hidden">
               <video class="h-screen w-full object-cover" autoplay loop muted itemprop="holiday in bali" style="z-index: -1;">
                   <source src="https://bvrbaliholidayrentals.com/videos/preview.mp4" type="video/mp4">
                   Your browser does not support the video tag.
               </video>

               <div class="absolute inset-0 bg-black opacity-50"></div>
           </div>

           <div class="w-full z-40">
               <div class="max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto px-4 md:px-0 space-y-8">
                   <div class="space-y-2">
                       <h1 class="text-neutral-200 font-light">
                           Welcome to BVR Bali Holiday Rentals
                       </h1>
                       <h2 class="text-4xl lg:text-6xl font-black text-white leading-loose max-w-xl">
                           Your One Stop Travel Platform
                       </h2>
                       <div class="">
                           <button @click="searchModal = !searchModal"
                                   class="flex justify-center items-center w-full px-24 py-3 bg-[#ff5700] block md:hidden">
                               <div class="text-white font-bold ">
                                   Search
                               </div>
                           </button>
                       </div>
                   </div>
               </div>
           </div>
       </header>

       <section
           x-transition x-cloak x-show="searchModal" x-on:click.away="window.innerWidth < 768 ? searchModal = false : null"
           class="absolute z-40 -mt-56 md:-mt-40 lg:-mt-28 inset-x-1 md:inset-x-8 lg:inset-x-48 xl:inset-x-52">
           <div class="w-full md:max-w-3xl lg:max-w-7xl space-y-[54px] ">
               <x-guest.search-bar-engine fromTable="property" />
           </div>
       </section>

       <script>
           function init() {
               window.addEventListener('resize', () => {
                   this.searchModal = window.innerWidth >= 768;
               });
           }
       </script>
   </div>
@endsection


@section('page-content')
    <main itemscope class="px-2 py-8 md:py-8 lg:py-16 md:pt-64 lg:pt-24 max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto space-y-[64px]">
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
                <a href="/properties" class="text-[#ff5700] flex items-center space-x-[4px]" title="See more"
                    itemprop="detail">
                    See more
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
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
                                class="h-44 w-full overflow-hidden object-cover" alt="{{$property->name}}">
                        @else
                            <img src="{{ asset('storage/' . $single_image) }}"
                                class="h-44 w-full overflow-hidden object-cover" alt="{{$property->name}}">
                        @endif
                        <div class="font-semibold mt-4  px-5 pb-5">
                            {{ $property->name }}
                            <div class="font-normal text-gray-600">
                                <a class="text-blue-800"
                                    href="areas/{{ Str::lower($property->location) }}">{{ $property->location }}</a>,
                                Indonesia
                            </div>
                            <a href="/properties/{{ $property->slug }}" class="block font-medium w-fit mt-2 text-[#ff5700]">View
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
                    Browse some of best activities and places to go in Canggu, Seminyak, Kuta, Ubud, and any other
                    sought-after places in Bali.
                </p>
                <a href="/activities" class="text-[#ff5700] flex items-center space-x-[4px]">
                    Bali tourist spots
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($activities as $activity)
                    <a href="/activities/category/{{ $activity->id }}" title="{{ $activity->name }}"
                        class="col-span-2 flex items-center md:col-span-1 p-12 lg:p-24 bg-center bg-cover"
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
                <a href="/areas" class="text-[#ff5700] flex items-center space-x-[4px]" title="Let me know!">
                    Let me know!
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-12 w-full gap-4 mt-4">
                @foreach ($areas as $area)
                    <a href="/areas/{{ Strtolower($area->location) }}" title="Location"
                        class="col-span-12 md:col-span-6 w-full h-44 flex items-center p-5"
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

        </section>
    </main>
@endsection

@section('additional-scripts')

@endsection
