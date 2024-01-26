@extends('layouts.main')

@section('page-title', 'Amazing Activities')

@section('page-meta-keywords',
    'bali safari marine park gianyar | bali bird park | destinations in bali | best adventure
    in bali | bali top adventure | water boom kuta | private surf lesson | night safari bali | attractions near ubud |
    waterboom bali | bali tourist spots | surfing bali | must visit places in bali | attractive places in bali | things to
    do in ubud | places to go in ubud | place to visit in canggu | things to do in canggu')

@section('page-header')
    <header class="pb-10 h-auto md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-start tracking-tight"
        style="
background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.pexels.com/photos/695779/pexels-photo-695779.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
background-size:cover;
background-position:center;
">
        <div class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
            <div class="">
                <h1 class="text-base font-normal md:text-xl text-gray-400">Welcome to BVR Bali Holiday Rentals</h1>
                <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">Dream Adventure Awaits!</h2>
            </div>
        </div>

    </header>
@endsection

@section('page-content')
    <section class="px-2 py-8 md:py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-4 lg:space-y-16">
        <x-guest.search-bar fromTable="activity" />

        <div class="grid grid-cols-12 gap-4 items-start" itemscope
            itemtype="https://www.bvrbaliholidayrentals.com/activities">
            <div
                class="col-span-12 lg:col-span-4 bg-white overflow-hidden order-first lg:order-last space-y-4 lg:sticky lg:top-5">
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
                        <div class="border">
                            <img src="{{ asset('storage/' . $activity_images) }}" alt="{{ $activity->name }}" class='h-44 w-full object-cover'>
                            <div class="p-4 space-y-2">
                                <div class="text-lg">
                                    {{ $activity->name }}
                                </div>
                                <a href="/activities/{{$activity->slug}}" class="block text-[#ff5700] w-fit">More Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $activities->links() }}
            </div>
        </div>
    </section>
@endsection
