@extends('layouts.admin')

@section('page-title', 'Property Management')

@section('page-content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
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
                id="" rows="5">
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
                    <input id="status" type="radio" value="1" name="status"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                    <label for="status" class="ml-2 text-sm font-semibold text-gray-900">
                        Live
                        <div class="text-sm text-gray-400 font-normal">
                            Property <span class="font-bold underline">WILL</span> be shown on the property list
                        </div>
                    </label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="status" type="radio" value="0" name="status"
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
