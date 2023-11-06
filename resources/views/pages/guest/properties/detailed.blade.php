@extends('layouts.detailed')

@section('page-title')
    {{ $property->name }}
@endsection

@section('page-content')

    @php
        // Pool Images

        $pool_images = $property->pool_images;

        $pool_images = str_replace('"', '', $pool_images);

        $pool_images = explode(',', $pool_images);

        // Restaurant Images

        $restaurant_images = $property->restaurant_images;

        $restaurant_images = str_replace('"', '', $restaurant_images);

        $restaurant_images = explode(',', $restaurant_images);

        // Images

        $property_images = $property->images;

        $property_images = str_replace('"', '', $property_images);

        $property_images = explode(',', $property_images);

        // Header Images

        $header_images = $property->header_images;

        $header_images = str_replace('"', '', $header_images);

        $header_images = explode(',', $header_images);

        // Room Images

        $room_images = $property->room_images;

        $room_images = str_replace('"', '', $room_images);

        $room_images = explode(',', $room_images);

    @endphp

    <div class="max-w-full md:max-w-3xl lg:max-w-5xl px-2 space-y-[24px] mx-auto mt-4" x-data="{

    }">

        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 lg:h-[450px]">
                @if ($property->header_images)
                    @if(count($header_images) > 1)
                        @foreach ($header_images as $header_image)
                            <div  class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/'.$header_image) }}"
                                     class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                     alt="{{ $property->name }}" title="{{ $property->name }}">
                            </div>
                        @endforeach
                    @endif
                        @foreach ($header_images as $header_image)
                            <div>
                                <img src="{{ asset('storage/'.$header_image) }}"
                                     class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                     alt="{{ $property->name }}" title="{{ $property->name }}">
                            </div>
                        @endforeach
                @else
                    @foreach ($property_images as $image)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('storage/' . $image) }}"
                                class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="{{ $property->name }}" title="{{ $property->name }}">
                        </div>
                    @endforeach
                @endif
            </div>
            <!-- Slider controls -->
            @if(count($header_images) > 1)
                <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
                </button>
                <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
                </button>
            </div>
        @endif

        @if(!$property->header_images)
            <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        @endif
        {{-- Main Section Start --}}
        <main class="space-y-[24px] w-full mx-auto mt-2 md:mt-4 lg:mt-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="/properties"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Properties</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span
                                class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $property->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="leading-tight text-3xl font-extrabold">
                {{ $property->name }}
            </h1>
            <p class="text-lg font-normal">
            <div class="grid grid-cols-12 gap-x-7 items-start">
                <div class="col-span-12 md:col-span-8 space-y-[20px]">
                    <div>
                        <div class="font-semibold text-gray-900">
                            Description
                        </div>
                        <p class="text-sm text-gray-500">
                            {{ $property->description }}
                        </p>
                    </div>
                    <div class="w-full rounded-md p-5 md:p-5 lg:p-12 text-center text-white font-bold space-y-[8px]"
                        style="
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/storage/{{ $property_images[1] }}');
                background-position: center;
                background-size:cover;
            ">
                        <p class="text-base md:text-base lg:text-lg">
                            Book Your Stay at {{ $property->name }}
                        </p>
                        <a href="{{ $property->booking_link }}"
                            class="bg-[#ff5700] block text-white w-fit px-4 py-2 text-sm rounded-md mx-auto">Book Now</a>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">
                            Facilities
                        </div>
                        <div class="flex flex-wrap gap-y-2 mt-3">
                            @if ($property->pool != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Pool</span>
                            @endif
                            @if ($property->bar != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Bar</span>
                            @endif
                            @if ($property->sauna != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Sauna</span>
                            @endif
                            @if ($property->garden != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Garden</span>
                            @endif
                            @if ($property->non_smoking_room != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Non
                                    Smoking Room</span>
                            @endif
                            @if ($property->family_room != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Family
                                    Room</span>
                            @endif
                            @if ($property->hot_tub != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Hot
                                    Tub</span>
                            @endif
                            @if ($property->jacuzzi != 0)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Jacuzzi</span>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-2 gap-3 md:gap-3 lg:gap-5 mt-2 w-full">
                            @if ($property->balcony != 0)
                            <div class="col-span-2 font-semibold text-gray-900">
                                Room Amenities
                            </div>
                                <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                    <div>
                                        Balcony
                                    </div>
                                </div>
                            @endif
                            @if ($property->tv != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Television
                                </div>
                            </div>
                            @endif
                            @if ($property->electric_kettle != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Electric Kettle
                                </div>
                            </div>
                            @endif
                            @if ($property->clothes_rack != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Clothes Rack
                                </div>
                            </div>
                            @endif
                            @if ($property->hair_dryer != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Hair Dryer
                                </div>
                            </div>
                            @endif
                            @if ($property->private_entrance != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Private Entrance
                                </div>
                            </div>
                            @endif
                            @if ($property->safety_box != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Safety Deposit Box
                                </div>
                            </div>
                            @endif
                            @if ($property->desk != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Desk
                                </div>
                            </div>
                            @endif
                            @if ($property->socket != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Electrical Socket
                                </div>
                            </div>
                            @endif
                            @if ($property->private_bathroom != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Bathroom
                                </div>
                            </div>
                            @endif
                            @if ($property->toilet_paper != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Toilet Paper
                                </div>
                            </div>
                            @endif
                            @if ($property->shower != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Shower
                                </div>
                            </div>
                            @endif
                            @if ($property->bathtub != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Bathtub
                                </div>
                            </div>
                            @endif
                            @if ($property->slipper != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Slippers
                                </div>
                            </div>
                            @endif
                            @if ($property->toileteries != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Toileteries
                                </div>
                            </div>
                            @endif
                            @if ($property->minibar != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Minibar
                                </div>
                            </div>
                            @endif
                            @if ($property->tea_coffee_maker != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                  Tea or Coffee Maker
                                </div>
                            </div>
                            @endif
                            @if ($property->smoke_alarm != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Smoke Alarm
                                </div>
                            </div>
                            @endif
                            @if ($property->fire_extinguisher != 0)
                            <div class="col-span-1 p-3 rounded-lg text-gray-700 flex space-x-[8px] items-center text-xs font-medium border">
                                <div>
                                    Fire Extinguisher
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="col-span-12 md:block md:col-span-4 space-y-[32px]">

                    <div class="p-5 border-[1px] border-gray-300 rounded-md bg-white drop-shadow-md space-y-[12px]">
                        <div class="uppercase text-sm font-bold">
                            Get the best rate from BVR Bali Holiday Rentals delivered to your inbox
                        </div>
                        <div class="text-sm font-normal">
                            Subscribe our newsletter for latest bali news and promotion. Let's stay updated!
                        </div>

                        <x-forms.subscriber/>

                    </div>
                </div>
            </div>


            @if (Session::has('success'))

                <x-alerts.success/>

            @endif

            @if ($errors->any())

                <x-alerts.error/>

            @endif


            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="col-span-2 md:col-span-3">
                    <div class="font-semibold">
                        Property Gallery
                    </div>

                </div>
                @foreach ($property_images as $image)
                    <div>
                        <button @click="openImageLightbox1 =! openImageLightbox1">
                            <img class="h-52 w-96 object-cover rounded-lg" src="/storage/{{ $image }}"
                                alt="{{ $property->name }}" title="{{ $property->name }}">
                        </button>
                        </button>
                    </div>
                @endforeach
                @if ($property->pool_images)
                    <div class="col-span-2 md:col-span-3">
                        <div class="font-semibold">
                            Pool Gallery
                        </div>

                    </div>
                    @foreach ($pool_images as $pool_image)
                        <div>
                            <button @click="openImageLightbox1 =! openImageLightbox1">
                                <img class="h-52 w-96 object-cover rounded-lg"
                                    src="{{ asset('storage/' . $pool_image) }}" alt="{{ $property->name }} Pool"
                                    title="{{ $property->name }} Pool">
                            </button>
                            </button>
                        </div>
                    @endforeach
                @endif
                @if ($property->restaurant_images)
                    <div class="col-span-2 md:col-span-3">
                        <div class="font-semibold">
                            Restaurant Gallery
                        </div>

                    </div>
                    @foreach ($restaurant_images as $restaurant_image)
                        <div>
                            <button @click="openImageLightbox1 =! openImageLightbox1">
                                <img class="h-52 w-96 object-cover rounded-lg"
                                    src="{{ asset('storage/' . $restaurant_image) }}"
                                    alt="{{ $property->name }} Restaurant" title="{{ $property->name }} Restaurant">
                            </button>
                            </button>
                        </div>
                    @endforeach
                @endif
                @if ($property->room_images)
                    <div class="col-span-2 md:col-span-3">
                        <div class="font-semibold">
                            Room Gallery
                        </div>

                    </div>
                    @foreach ($room_images as $room_image)
                        <div>
                            <button @click="openImageLightbox1 =! openImageLightbox1">
                                <img class="h-52 w-96 object-cover rounded-lg"
                                    src="{{ asset('storage/' . $room_image) }}" alt="{{ $property->name }} Room(s)"
                                    title="{{ $property->name }} Room(s)">
                            </button>
                            </button>
                        </div>
                    @endforeach
                @endif
            </div>

        </main>
        {{-- Main Section End --}}

        {{-- Image Lightboxes Section Start --}}

        {{-- Image Lightboxes Section End --}}

    </div>
@endsection
