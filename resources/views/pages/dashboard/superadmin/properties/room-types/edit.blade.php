@extends('layouts.admin')

@section('page-title', 'Property Management')

@section('page-content')
    @if ($errors->any())
        <div class="px-5 py-5 md:px-12 lg:px-[100px]">

            <div class="flex p-4 mb-4 w-1/2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                 role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Danger</span>
                <div>
                    <span class="font-medium">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    </span>
                    <ul class="mt-1.5 ml-4 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    @endif
    <section class="grid grid-cols-12 pt-4 px-5 md:px-8 lg:px-[100px] gap-y-5">
        <nav class="col-span-12 flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#"
                       class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('properties.index') }}"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Property List</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Add New
                            Room Type</span>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="col-span-12 font-bold tracking-tight text-xl">
            Add New Room Type
            <p class="text-base font-normal w-1/2 text-neutral-500 leading-relaxed">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Aspernatur dolor fugiat, iure aliquid cupiditate rerum quaerat doloremque expedita non
                architecto voluptate, aperiam dignissimos. Quia, veritatis!</p>
        </div>
    </section>

    <form enctype="multipart/form-data" method="POST" enctype="multipart/form-data"
          action="{{ route('room-type.update', $roomTypes->id) }}" class="grid grid-cols-12 gap-x-5 mt-4 px-5 md:px-8 lg:px-[100px] gap-y-5">
        @method('PUT')
        @csrf
        <div class="col-span-4">
            <label for="name" class="font-semibold">Room Type Name</label>
            <input type="text" name="name" id="name" placeholder="e.g Deluxe Room with Pool View" value={{ $roomTypes->name }} required
                   class="block w-full py-2 px-2 mt-3 rounded-md border-[1px] border-neutral-500">
        </div>
        <div class="col-span-4">
            <label for="name" class="font-semibold">Room Area</label>
            <input type="num" name="room_area" placeholder="145.4"  value={{ $roomTypes->room_area }} required
                   class="block w-1/2 py-2 px-2 mt-3 rounded-md border-[1px] border-neutral-500">
        </div>
        <div class="col-span-4">
            <label for="name" class="font-semibold">Maximum Adult</label>
            <input type="num" name="maximum_adult" placeholder="2" value={{ $roomTypes->maximum_adult }} required
                   class="block w-full py-2 px-2 mt-3 rounded-md border-[1px] border-neutral-500">
        </div>
        <div class="col-span-4">
            <label for="name" class="font-semibold">Maximum Child</label>
            <input type="num" name="maximum_child" placeholder="2" value={{ $roomTypes->maximum_child }} required
                   class="block w-full py-2 px-2 mt-3 rounded-md border-[1px] border-neutral-500">
        </div>

        <div class="col-span-6">
            <label for="name" class="font-semibold">Price Per Night</label>

            <input type="num" name="price_per_night" placeholder="IDR 2,400,000" value={{ $roomTypes->price_per_night }} required
                   class="block w-full py-2 px-2 mt-3 rounded-md border-[1px] border-neutral-500">
        </div>

        <div class="col-span-4">
            <div class="flex items-center space-x-[8px] mb-2">
                <label for="description" class="block text-sm font-medium text-gray-900 dark:text-white">Property
                    Images</label>
            </div>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="images" name="images[]" type="file" multiple>
            <p x-cloak x-transition x-show="openPopover2" class="text-xs text-gray-500 mt-2">
                Recommended Pictures should have <span class="font-bold">1920x1080</span> resolution. <br />
                System will only accept these file extensions : <span class="font-bold">.jpg, .jpeg, .png,
                            .webp</span>
            </p>
        </div>
        <div class="col-span-12">
            <button type="submit"
                    class="w-8/12 py-2 bg-blue-500 text-white font-bold mt-2 hover:bg-blue-600 transition-all duration-300 rounded-md">Submit</button>
        </div>
    </form>
    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection
