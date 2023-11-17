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
    <section class="grid grid-cols-12 pt-12 px-5 md:px-8 lg:px-[100px] gap-y-5">
        <div class="col-span-12 font-bold tracking-tight text-xl">
            Edit {{ $activity->name }}
            <p class="text-base font-normal w-1/2 text-neutral-500 leading-relaxed">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Aspernatur dolor fugiat, iure aliquid cupiditate rerum quaerat doloremque expedita non
                architecto voluptate, aperiam dignissimos. Quia, veritatis!</p>
        </div>
    </section>
    <form enctype="multipart/form-data" method="POST" enctype="multipart/form-data"
        action="{{ route('activities.update', $activity->id) }}"class="grid grid-cols-12 gap-x-5 mt-4 px-5 md:px-8 lg:px-[100px] gap-y-5">
        @method('PUT')
        @csrf
        <div class="col-span-4">
            <label for="name" class="font-semibold">Activity Name</label>
            <input type="text" value="{{ $activity->name }}" name="name" id="name"
                class="block w-full py-2 px-2 mt-3">
        </div>
        <div class="col-span-4">
            <label for="" class="font-semibold">Area</label>
            <select name="area_id" id="area_id" class="block w-full py-2 px-2 mt-3">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->location }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Category</label>
            <select name="category_id" id="category_id" class="block w-full py-2 px-2 mt-3">
                @foreach ($categories as $category)
                    <option @if($activity->category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-8">
            <label for="name" class="font-semibold">URL Slug</label>
            <div class="text-sm text-gray-400 font-normal">
                URL Slug is used to create a SEO-friendly link.
            </div>
            <input value="{{ $activity->slug }}" type="text" name="slug" id="slug"
                placeholder="e.g the-chillhouse-canggu" class="block w-full py-2 px-2 mt-3">
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Property Images</label>
            <input type="file" name="images[]" class="block w-full mt-1 rounded-md" placeholder="" multiple />
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Description</label>
            <textarea name="description" class="block w-full px-2 py-2 leading-relaxed mt-3"
                placeholder="e.g The Chillhouse Canggu by BVR Bali Holiday Rentals is nestled among rice fields in Canggu and ocated a 5-minute drive from Echo Beach."
                      id="tinymce">
                {{ $activity->description }}
            </textarea>
        </div>

        <div class="col-span-8">
            <label for="" class="font-semibold">Price</label>
            <div class="flex items-center">
                <span
                    class="h-full rounded-tl-md rounded-bl-md border border-r-0 border-stroke bg-gray-1 py-3 px-4 text-base uppercase text-body-color">
                    IDR
                </span>
                <input type="num" value="{{ $activity->price }}" name="price" id="price" placeholder="250000"
                    class="w-full rounded-br-md rounded-tr-md border border-form-stroke p-3 pl-5 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
            </div>
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Booking Link</label>
            <div class="flex items-center">
                <input type="text" name="booking_link" id="booking_link" value="{{ $activity->booking_link }}"
                    placeholder="e.g https://random-link.com" class="block w-full py-2 px-2 mt-3">
            </div>
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Property Status</label>
            <div class="flex mt-3">
                <div class="flex items-center mr-14">
                    <input id="status" type="radio" value="1" name="status"  {{ $activity->status == '1' ? 'checked' : '' }}
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                    <label for="status" class="ml-2 text-sm font-semibold text-gray-900">
                        Live
                        <div class="text-sm text-gray-400 font-normal">
                            Property <span class="font-bold underline">WILL</span> be shown on the property list
                        </div>
                    </label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="status" type="radio" value="0" name="status" {{ $activity->status == '0' ? 'checked' : '' }}
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                    <label for="status" class="ml-2 text-sm font-semibold text-gray-900">
                        Not Live
                        <div class="text-sm text-gray-400 font-normal">
                            Property will <span class="font-bold underline">NOT</span> be shown on the property list
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-span-8">
            <button type="submit"
                class="w-full py-2 bg-blue-500 text-white font-bold mt-2 hover:bg-blue-600 transition-all duration-300 rounded-md">Submit</button>
        </div>
    </form>
    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection
