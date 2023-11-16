@extends('layouts.main')

@section('page-title', 'Special Offers')

@section('page-header')
<header class="pb-10 h-[75vh] md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-start tracking-tight"
style="
background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
background-size:cover;
background-position:center;
">
<div class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
    <div class="">
        <h1 class="text-base font-normal md:text-xl text-gray-400">BVR Bali Holiday Rentals</h1>
        <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">Special Offers</h2>
    </div>
</div>

</header>
@endsection

@section('page-content')
<section class="px-2 py-8 md:py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-6xl mx-auto space-y-[64px]">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" itemscope itemtype="https://www.bvrbaliholidayrentals.com/special-offers">

        @if (count($special_offers)>0)
            @foreach ($special_offers as $offer)
            <div class="border bg-white hover:drop-shadow-md transition">
                <img src="{{asset('storage/'.$offer->image)}}" class="h-44 w-full object-cover" alt="{{$offer->package_name}}" itemprop="images">
                <div class="p-4 space-y-2">
                    <h3 class="font-semibold text-neutral-800" itemprop="name">
                        {{$offer->package_name}}
                    </h3>
                    <a class="text-[#ff5700] font-normal text-sm flex w-fit items-center space-x-1" href="{{route('offer.detail',$offer->slug)}}" title="More Details">
                        <div>
                            More Details
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                              </svg>

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-span-3">
                <p class="font-bold text-2xl">
                    There are no special offers yet at the moment.
                </p>
                <p class="text-neutral-600 font-light">
                    Please check again later.
                </p>
            </div>
        @endif

    </div>
</section>
@endsection
