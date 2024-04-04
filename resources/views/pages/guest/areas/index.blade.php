@extends('layouts.main')

{!!seo($seoData)!!}

@section('page-content')

    <x-guest.header coverImage="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" subTitle="Discover Bali's Diversity" mainTitle="Exploring Bali's Regions"/>

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

    <section class="px-2 py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]" itemscope itemtype="https://www.bvrbaliholidayrentals.com/areas">
        @foreach ($areas as $area)
            <div class="block border rounded-lg">
                <img src="/storage/{{$area->image}}" itemprop="images" class="w-full h-44 object-cover overflow-hidden" alt="{{ $area->location }}">
                <div class="p-5 space-y-[16px]">
                    <div class="space-y-[8px]">
                        <h2 class="font-medium text-lg text-gray-900" itemprop="location">
                            {{$area->location}}
                        </h2>
                        <p class="text-gray-700" itemprop="description">
                            {{Str::limit($area->description,150)}}
                        </p>
                    </div>
                    <a href="/areas/{{Str::lower($area->location)}}" class="block text-blue-700" title="More Detail">More Details</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection
