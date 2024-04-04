@extends('layouts.main')

{!! seo($seoData) !!}

@php
    $metaRobots = request()->has('page') ? 'noindex' : 'index,follow';
@endphp

@section('page-content')

    <x-guest.header subTitle="Unveiling Bali's Finest: Explore Our Exquisite Collection of Properties"
        mainTitle="Discover Your Dream Escape: Dive Into Our Premier Bali Holiday Rentals"
        coverImage="https://images.unsplash.com/photo-1540541338287-41700207dee6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" />

    <div x-data="{ searchModal: window.innerWidth >= 768 }" x-init="init" class="">
        <div class="w-full flex justify-center items-center">
            <button @click.stop="searchModal = !searchModal" class="-mt-52 w-full mx-4 py-3 bg-[#ff5700] block md:hidden">
                <div class="text-white font-bold">
                    Search
                </div>
            </button>
        </div>

        <div  x-transition x-cloak x-show="searchModal" x-on:click.away="window.innerWidth < 768 ? searchModal = false : null">
            <section class="-mt-28 flex justify-center">
                <div class="lg:px-2 py-2 max-w-full md:max-w-3xl lg:max-w-7xl space-y-[54px]">
                    <x-guest.search-bar-engine fromTable="property" />
                </div>
            </section>
        </div>

        <script>
            function init() {
                window.addEventListener('resize', () => {
                    this.searchModal = window.innerWidth >= 768;
                });
            }
        </script>
    </div>

    <section class="px-2 py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <div class="grid grid-cols-3 gap-5">
            @if ($properties->isEmpty())

                <div class="col-span-3 max-w-lg leading-relaxed font-light text-neutral-600 p-4">
                    <div class="font-bold text-2xl text-[#ff5700]">
                        Whoops!
                    </div>
                    Sorry, there are no properties matching your search criteria. Please try a different search.
                </div>
            @else
                @foreach ($properties as $property)
                    @if ($property->images != '')
                        {{-- Extract first picture and store it in a variable --}}
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
                        <div class="col-span-3 md:col-span-1 border bg-white hover:drop-shadow-md transition" itemscope
                             itemtype="https://www.bvrbaliholidayrentals.com/properties">

                            @if ($property->header_images)
                                <img src="{{ asset('storage/' . $single_header) }}" itemprop="image"
                                     class="h-44 w-full overflow-hidden object-cover" alt="{{ $property->name }}">
                            @else
                                <img src="{{ asset('storage/' . $single_image) }}" itemprop="image"
                                     class="h-44 w-full overflow-hidden object-cover" alt="Ex Images">
                            @endif
                            <div class="font-semibold mt-4  px-5 pb-5">
                                <p itemprop="name">{{ $property->name }}</p>
                                <div class="font-normal text-gray-600">
                                    <a class="text-blue-800" title="location"
                                       href="areas/{{ Str::lower($property->location->location) }}">{{ $property->location->location }}</a>,
                                    Indonesia
                                </div>
                                <a href="/properties/{{ $property->slug }}" title="View More Details"
                                   class="block w-fit mt-2 font-medium text-[#ff5700]">View
                                    More Details</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        <div class="col-span-12">
            <div class="w-fit mx-auto">
                {{ $properties->links('pagination::tailwind') }}
            </div>
        </div>
    </section>


    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection

@section('additional-scripts')
    <script src="https://unpkg.com/flowbite@1.6.4/dist/flowbite.js"></script>
@endsection
