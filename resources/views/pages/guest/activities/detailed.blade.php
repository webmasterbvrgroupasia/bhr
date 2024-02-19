@extends('layouts.detailed')

@section('page-title')
    {{ $activity->name }}
@endsection

@section('page-content')
    <div class="max-w-full md:max-w-3xl lg:max-w-5xl px-2 space-y-[24px] mx-auto mt-4" x-data="{
    
    }">

        <div class="w-full">
            <img src="{{ asset('storage/' . $images[0]) }}" class="h-52 md:h-96 w-full object-cover rounded-lg" alt="">
        </div>



        {{-- Main Section Start --}}
        <main class="space-y-[24px] w-full mx-auto mt-2 md:mt-4 lg:mt-8 pb-16" itemscope>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" title="Home"
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
                            <a href="/activities" title="Activities"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Activities</a>
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
                                class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $activity->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="leading-tight text-3xl font-extrabold" itemprop="name">
                {{ $activity->name }}
            </h1>
            <p class="text-lg font-normal">
            <div class="grid grid-cols-12 gap-x-7 items-start">
                <div class="col-span-12 md:col-span-8 space-y-[20px]">
                    <div class="space-y-2">
                        <div class="font-semibold text-gray-900">
                            Inclusion
                        </div>
                        <div class="text-neutral-600">
                            @php
                                $inclusions = $activity->inclusions;
                                $inclusionArr = explode('-', $inclusions);
                            @endphp
                            <ul class="">
                                @foreach ($inclusionArr as $inclusion)
                                    <li>
                                        @php
                                            $inclusion = str_replace(',', ' ', $inclusion);
                                        @endphp

                                        {!! $inclusion !!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @if ($activity->description)
                            <div class="font-semibold text-gray-900">
                                Description
                            </div>
                            <div class="text-sm text-gray-500 leading-relaxed" itemprop="description">
                                {!! $activity->description !!}
                            </div>
                        @endif
                    </div>
                    <div class="space-y-4">
                        @if ($activity->price > '0.00')
                            <div class="font-semibold text-gray-900">
                                Start From
                            </div>
                            <span>
                                <span class="line-through block text-xs font-medium text-red-800">
                                    IDR {{number_format($dummyPrice)}}
                                </span>
                            </span>
                            <span class="text-sm text-gray-800 font-semibold" itemprop="price">
                                IDR {{ number_format($activity->price) }}
                            </span>
                            <div class="mt-[8px] w-full rounded-md p-5 md:p-5 lg:p-12 text-center text-white font-bold space-y-[8px]"
                                style="
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/storage/{{ $images[0] }}');
                background-position: center;
                background-size:cover;">
                                <p class="text-base md:text-base lg:text-lg" title="{{ $activity->name }}">
                                    Save your seat for {{ $activity->name }}
                                </p>
                                <a href="https://wa.me/6285738930043" title="Book Now"
                                    class="bg-[#ff5700] block text-white w-fit px-4 py-2 text-sm rounded-md mx-auto">Book
                                    Now</a>
                            </div>
                        @else
                            <div class="font-semibold text-gray-900">
                                Contact Us For More Details
                            </div>
                            <div class="mt-[8px] w-full rounded-md p-5 md:p-5 lg:p-12 text-center text-white font-bold space-y-[8px]"
                                style="
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/storage/{{ $images[0] }}');
                background-position: center;
                background-size:cover;
            ">
                                <p class="text-base md:text-base lg:text-lg">
                                    Save your seat for {{ $activity->name }}
                                </p>
                                <a href="{{ $activity->booking_link }}" title="Book Now"
                                    class="bg-[#ff5700] block text-white w-fit px-4 py-2 text-sm rounded-md mx-auto">Book
                                    Now</a>
                            </div>
                        @endif
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

                        <x-forms.subscriber />

                    </div>
                </div>

            </div>

        </main>
        {{-- Main Section End --}}

        {{-- Image Lightboxes Section Start --}}

        {{-- Image Lightboxes Section End --}}

    </div>
@endsection
