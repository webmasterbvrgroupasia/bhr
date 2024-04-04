@extends('layouts.main')

{!!seo($seoData)!!}

@section('page-content')
    <x-guest.header subTitle="Experience Bali Beyond Borders: Dive Into Thrilling Activities"
        mainTitle="Thrills, Spills, and Adventures: Unleash Your Bali Experience with Exciting Activities"
        coverImage="https://images.pexels.com/photos/695779/pexels-photo-695779.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />

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

    <section class="px-2 py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-4 lg:space-y-16">
        <div class="grid grid-cols-12 gap-4 items-start" itemscope
            itemtype="https://www.bvrbaliholidayrentals.com/activities">

            <div class="col-span-12 md:col-span-12 lg:col-span-8 space-y-[32px] order-first">
                <div class="grid grid-cols-2 gap-4">
                    @if ($activities->isEmpty())
                        <div class="col-span-2 max-w-lg leading-relaxed font-light text-neutral-600 p-4">
                            <div class="font-bold text-2xl text-[#ff5700]">
                                Whoops!
                            </div>
                            Sorry, there are no properties matching your search criteria. Please try a different search.
                        </div>
                    @else
                        @foreach ($activities as $activity)
                            @php

                                $activity_image = $activity->images;

                                $activity_images = str_replace('"', '', $activity_image);

                            @endphp
                            <div class="col-span-2 md:col-span-1 border">
                                <img src="{{ asset('storage/' . $activity_images) }}" alt="{{ $activity->name }}"
                                    class='h-44 w-full object-cover'>
                                <div class="p-4 space-y-2">
                                    <div class="text-lg">
                                        {{ $activity->name }}
                                    </div>
                                    <a href="/activities/{{ $activity->slug }}" class="block text-[#ff5700] w-fit">More
                                        Details</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $activities->links() }}
            </div>
            <div
                class="col-span-12 lg:col-span-4 bg-white overflow-hidden order-first lg:order-last space-y-4">
                <div class="p-4 border" x-data="{ toggleActivityCategoriesDropdown: true }">
                    <div class="text-sm font-medium">
                        <button class="flex items-center justify-between w-full"
                                @click="toggleActivityCategoriesDropdown =! toggleActivityCategoriesDropdown">
                            <div>
                                Browse Activity by Category
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </div>
                        </button>
                    </div>
                    <div class="space-y-2 mt-2" x-cloak x-transition x-show="toggleActivityCategoriesDropdown">
                        @foreach ($categories as $category)
                            <div class="">
                                <a href="{{ route('activity-category.filter', $category->id) }}"
                                   class="text-sm text-neutral-600">
                                    {{ $category->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
