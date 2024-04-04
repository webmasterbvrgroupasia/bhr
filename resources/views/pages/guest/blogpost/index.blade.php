@extends('layouts.main')

{!! seo($seoData) !!}

@section('page-content')
    <x-guest.header subTitle="Discover the Ultimate Guide to Bali Bliss with BVR Bali Holiday Rentals"
        mainTitle="Unlocking Paradise: Your Insider's Guide to Luxury Bali Retreats"
        coverImage="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" />

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

    <section class="px-2 py-8  lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <div class="grid grid-cols-12 gap-6 items-start ">
            <div class="col-span-12 md:col-span-12 lg:col-span-10 space-y-[32px] " itemscope
                itemtype="https://www.bvrbaliholidayrentals.com/blogpost">
                @foreach ($posts as $post)
                    <div class="space-y-[8px] p-8 border rounded-lg">
                        <h3 class="leading-tight text-3xl font-extrabold text-gray-900" itemprop="title">
                            {{ $post->title }}
                        </h3>
                        <p class="text-lg font-normal text-gray-500" itemprop="content">
                            {!! Str::limit($post->content, 250) !!}
                        </p>
                        <a href="/blogpost/{{ $post->slug }}"
                            class="flex items-center space-x-[8px] text-blue-700 font-medium" title="Read More">
                            <div>
                                Read More
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
