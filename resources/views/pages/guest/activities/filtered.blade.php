@extends('layouts.main')

@section('page-title', 'Amazing Activities')

@section('page-meta-keywords')
@endsection

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
    <div class="hidden md:block bg-white p-[10px] md:-mt-28 lg:-mt-16 rounded-lg border">
        <form method="POST" action="" class="grid grid-cols-2 lg:grid-cols-12 gap-[16px]">
            <div class="relative col-span-2 md:col-span-2 lg:col-span-4">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5 text-gray-400">
                        <path fill-rule="evenodd"
                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <input type="text" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Where to">
            </div>
            <div class="relative  col-span-2 md:col-span-1  lg:col-span-3">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5 text-gray-400">
                        <path
                            d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd"
                            d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Check In - Check Out">
            </div>
            <div class="relative col-span-2 md:col-span-1  lg:col-span-3">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5 text-gray-400">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd" />
                    </svg>


                </div>
                <input type="text" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="2 Adults, 1 Children">
            </div>
            <button
                class="bg-[#ff5700] rounded-lg text-white w-full md:w-fit lg:w-full px-6 py-[14px] flex justify-center col-span-2 md:col-span-1  lg:col-span-2">
                <div class="flex items-center space-x-[8px]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div>
                        Search
                    </div>
                </div>
            </button>

        </form>
    </div>
    <div class="grid grid-cols-12 gap-6 items-start" itemscope itemtype="https://www.bvrbaliholidayrentals.com/activities">
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
                @foreach ($activities as $activity)
                    @php
                        $activity_image = $activity->images;

                        $activity_images = str_replace('"', '', $activity_image);

                    @endphp
                    <div class="border">
                        <img src="{{ asset('storage/' . $activity_images) }}" alt="{{ $activity->name }}"
                            class="h-44 w-full object-cover">
                        <div class="p-4 space-y-2">
                            <div class="text-lg">
                                {{ $activity->name }}
                            </div>
                            <a href="/activities/{{$activity->slug}}" class="block text-[#ff5700] w-fit">More Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$activities->links()}}
        </div>
    </div>
</section>
@endsection
