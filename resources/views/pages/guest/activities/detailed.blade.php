@extends('layouts.detailed')

@section('page-title')
    {{ $activity->name }}
@endsection

@section('page-content')
    <div class="max-w-full md:max-w-3xl lg:max-w-5xl px-2 space-y-[24px] mx-auto mt-4" x-data="{
    
    }">

        <div class="w-full">
            <img src="{{ asset('storage/' . $images[0]) }}" class="h-52 md:h-96 w-full object-cover rounded-lg" alt="">
        </div>



     

        {{-- Image Lightboxes Section Start --}}

        {{-- Image Lightboxes Section End --}}

    </div>
@endsection
