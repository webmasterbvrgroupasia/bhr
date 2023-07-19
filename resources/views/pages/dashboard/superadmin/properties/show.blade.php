@extends('layouts.admin')

@section('page-title')
{{$property->name}}
@endsection

@section('page-content')
    <section class="grid grid-cols-12 pt-12 px-5 md:px-8 lg:px-[100px] gap-y-5">
        <div class="col-span-12 font-bold tracking-tight text-xl">
           Details
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-[100px] py-4 mt-4 space-y-5">
        <div class="bg-white rounded-lg">
            <div class="font-medium">
                Property Name
            </div>
            <div>
                {{$property->name}}
            </div>
        </div>
        <div class="bg-white rounded-lg">
            <div class="font-medium">
                Property Description
            </div>
            <div class="w-3/4">
                {{$property->description}}
            </div>
        </div>
    </section>
    <section class="grid grid-cols-12 px-5 md:px-12 lg:px-[100px] gap-y-2 gap-x-5">
        <div class="col-span-12 rounded-lg">
            <div class="font-medium flex justify-between items-center">
                Available Room Type at {{$property->name}}
                
            </div>
        </div>
        <div class="col-span-12 justify-end flex">
            <a href="{{ route('properties.add-room-type', $property->id) }}" class="bg-blue-500 flex w-fit text-white hover:bg-white hover:text-blue-500 transition-all duration-300 py-2 px-2 rounded-md drop-shadow-md">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                      </svg>
                      
                </div>
                <div>
                    Add New Room Type
                </div>
            </a>
        </div>
        @foreach($property->room_type as $roomtype)
        <div class="col-span-4 bg-white drop-shadow-md overflow-hidden rounded-lg">
            <img class="h-44 w-full object-cover" src="https://plus.unsplash.com/premium_photo-1663126298656-33616be83c32?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
            <div class="px-5 py-3">
                <div class="font-medium">
                    {{ $roomtype->name }}
                </div>
                <div>
                    {{$roomtype->room_area}} m<sup>2</sup>
                </div>
            </div>
        </div>
        @endforeach

    </section>

    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection
