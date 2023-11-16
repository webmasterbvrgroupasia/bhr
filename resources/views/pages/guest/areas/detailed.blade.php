@extends('layouts.detailed')

@section('page-title')
    {{ $area->location }}
@endsection

@section('page-header')
<header class="pt-24 w-3/4 mx-auto">
    <img class="h-44 md:h-56 lg:h-96 object-cover w-full rounded-2xl" src="/storage/{{ $area->image }}" alt="">
</header>
@endsection

@section('page-content')
<section class="mt-5 md:mt-10 lg:mt-10 px-5 md:px-12 lg:px-[300px]" itemscope>
    <h1 class="text-2xl font-bold" itemprop="name">
        {{ $area->location }}
    </h1>
    <p class="leading-loose mt-4 md:mt-4 lg:mt-4" itemprop="description">
        {{ $area->description }}
    </p>
</section>
@endsection
