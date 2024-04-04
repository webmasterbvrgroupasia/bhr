@extends('layouts.main')

{!! seo($seoData) !!}

@section('page-content')
    <x-guest.header mainTitle="Unwrap Unforgettable Memories: Explore Our Special Offers" subTitle="Exclusive Deals Await"
        coverImage="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

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

    <section class="py-8 md:py-16 w-full">
        <div class="max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-auto px-4 md:px-0 grid grid-cols-12 gap-4 items-start">
            @foreach ($special_offers as $special_offer)
                <div class="col-span-12 md:col-span-8 grid md:grid-cols-3 items-center border border-neutral-50 bg-white hover:drop-shadow-sm">
                    <div class="">
                        <img src="{{asset('storage/'.$special_offer->image)}}" class="h-44 w-full object-cover" alt="">
                    </div>
                    <div class="md:col-span-2 p-4 space-y-2">
                        <h4 class="font-extrabold text-lg">
                            {{ $special_offer->package_name }}
                        </h4>
                        <p class="leading-relaxed text-neutral-600">
                            {{ Str::limit($special_offer->description) }}
                        </p>
                        <a href="{{ route('guest.special-offers.show', $special_offer->slug) }}"
                            class="py-2.5 text-[#ff5700] font-medium flex text-sm space-x-2 items-center w-fit">
                            <div>
                                More Details
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>

                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="col-span-12 md:col-span-4 border border-neutral-200/40 bg-white drop-shadow">
                <img src="https://bvrgroupasia.com/images/bvr-building.webp" class="w-full h-44 object-cover" alt="">
                <div class="p-4 space-y-4">
                    <h5 class="font-medium">
                        Subscribe to BVR Group Asia: Bulletin Insights
                    </h5>
                    <form action="" class="space-y-2">
                        <div class="space-y-2">
                            <label for="">First Name <span class="text-red-400">*</span></label>
                            <input type="text" name="first_name" id="first_name" class="w-full">
                        </div>
                        <div class="space-y-2">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="w-full">
                        </div>
                        <div>
                            <button class="text-white bg-[#ff5700] w-full py-2.5">Submit</button>
                        </div>
                        <hr>
                        <div class="text-xs text-neutral-600">
                            By clicking the submit button, you consent to receive updates from BVR Group Asia's Business Bulletin Insights.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
