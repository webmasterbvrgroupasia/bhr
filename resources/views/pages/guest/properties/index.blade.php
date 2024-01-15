@extends('layouts.main')

@section('page-title', 'Explore Our Properties')

@section('additional-style')
@endsection

@php
    $metaRobots = request()->has('page') ? 'noindex' : 'index,follow';
@endphp

{{-- Page Meta Keywords --}}
@section('page-meta-keywords', 'hotel ubud bali | seminyak villas | hotel nusa dua bali | hotel canggu bali | villa kuta
    bali | canggu resorts | best hotels in bali | bali hotels and resorts | bali resort | canggu bali villas | ubud villas |
    bali villa rentals | hotel private pool bali | bali villa rentals | villa nusa dua bali | villa ubud private pool | bali
    private villas | best place to stay in bali | vacation villa bali | villa bali | bali pool villa | bali beach rentals |
    bali all inclusive villas')

@section('page-header')
    <header class="pb-10 h-[75vh] md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-start tracking-tight"
        style="
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1540541338287-41700207dee6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        background-size:cover;
        background-position:center;
    ">
        <div class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
            <div class="">
                <h1 class="text-base font-normal md:text-xl text-gray-400">Welcome to BVR Bali Holiday Rentals</h1>
                <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">Our Curated Properties</h2>
            </div>
        </div>

    </header>
@endsection

@section('page-content')

    <section class="px-2 py-8 md:py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <x-guest.search-bar fromTable="property" />
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
