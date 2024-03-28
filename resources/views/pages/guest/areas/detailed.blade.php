@extends('layouts.detailed')

{!!seo($seoData)!!}

@section('page-title')
    {{ $area->location }}
@endsection

@section('page-header')
<header class="pt-24 w-3/4 mx-auto">
    <img class="h-44 md:h-56 lg:h-96 object-cover w-full rounded-2xl" src="/storage/{{ $area->image }}" alt="">
</header>
@endsection

@section('page-content')
<section class="mt-5 md:mt-10 lg:mt-10 px-5 md:px-12 lg:px-[300px] py-16 md:py-16" itemscope>
    <h1 class="text-2xl font-bold" itemprop="name">
        {{ $area->location }}
    </h1>
    <p class="leading-loose mt-4 md:mt-4 lg:mt-4 font-light" itemprop="description">
        {{ $area->description }}
    </p>
</section>

<section class="mt-5 md:mt-10 lg:mt-10 px-5 md:px-12 lg:px-[300px] py-16 md:py-16">
    <div class="grid grid-cols-3 gap-5">
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
                             href="areas/{{ Str::lower($property->location) }}">{{ $property->location}}</a>
                            Indonesia
                        </div>
                        <a href="/properties/{{ $property->slug }}" title="View More Details"
                           class="block w-fit mt-2 font-medium text-[#ff5700]">View
                            More Details</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
@endsection
