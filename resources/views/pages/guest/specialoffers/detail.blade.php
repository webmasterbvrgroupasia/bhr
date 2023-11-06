@extends('layouts.main')

@section('page-title')
    {{ $offer->package_name }}
@endsection

@section('page-header')
    <header class="pb-10 h-[75vh] md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-start tracking-tight"
        style="
background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{ asset('storage/' . $offer->image) }}');
background-size:cover;
background-position:center;
">
        <div class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
            <div class="">
                <h1 class="text-base font-normal md:text-xl text-gray-400">Special Offers</h1>
                <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">{{ $offer->package_name }}</h2>
            </div>
        </div>

    </header>
@endsection

@section('page-content')
    <section class="px-2 py-8 md:py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <div class="space-y-4 w-full lg:w-8/12">
            <div class="space-y-2">
                <div class="font-semibold text-base text-gray-900">
                    Description
                </div>
                <p class="text-base text-neutral-500 w-full md:w-full">
                    {{ $offer->description }}
                </p>
            </div>
            <div class="space-y-2">
                <div class="font-semibold text-base text-gray-900">
                    Inclusions in this Package
                </div>
                <p class="text-base text-gray-500 w-full md:w-full">

                    @php

                        $inclusionsCollection = $offer->inclusions;

                        $singleInclusion = explode(',', $inclusionsCollection);

                    @endphp

                <ul class="list-disc px-4 text-neutral-500 space-y-2">
                    @foreach ($singleInclusion as $si)
                        <li>
                            {{ $si }}
                        </li>
                    @endforeach
                </ul>

                </p>
            </div>
            <div class="grid grid-cols-2 gap-2">
                @php
                    $relatedImages = $offer->related_images;

                    $relatedImages = str_replace('"', '', $relatedImages);

                    $relatedImage = explode(',', $relatedImages);

                @endphp

                @foreach ($relatedImage as $image)

                    <div class="">
                
                        <img src="{{ asset('storage/' . $image) }}" alt="{{$offer->package_name}}" title="{{$offer->package_name}}" class="h-44 w-full object-cover">
                
                    </div>
                
                @endforeach

            </div>
            <div>
                @if ($offer->additional_notes)
                    <div class="font-semibold text-gray-900">
                        Additional Notes
                    </div>
                    <p class="text-base text-gray-500">
                        {{ $offer->additional_notes }}
                    </p>
                @endif
            </div>
            <div class="space-y-4">
                <div>
                    <a class="w-full text-center text-sm block bg-[#ff5700] text-white hover:text-[#ff5700] hover:bg-white transition py-2.5"
                        href="https://wa.me/6285738930043">Book Now!</a>
                </div>
            </div>
            @if ($offer->youtube_link)               
            <div class="py-8">
                <iframe class="w-full h-52 md:h-96 lg:h-96" src="https://www.youtube.com/embed/{{$offer->youtube_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            @endif
        </div>
    </section>
@endsection
