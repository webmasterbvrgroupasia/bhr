@extends ('layouts.admin')

@section('page-title', 'Add New Property')

@section('page-content')
    <section class="w-full py-12 text-gray-900" x-data="{
        openPopover1: false,
        openPopover2: false,
        openPopover3: false,
        openPopover4: false,
        openPopover5: false,

    }">
        <div class="max-w-4xl p-5 bg-white drop-shadow-md mx-auto space-y-[16px] h-[75vh] overflow-y-scroll">

            <h4 class="text-xl font-bold dark:text-white">Add New Property</h4>

            <form action="{{ route('properties.store') }}" method="POST" class="grid grid-cols-4 gap-5"
                enctype="multipart/form-data">
                @csrf
                <div class="col-span-4">
                    <h5 class="text-lg font-bold text-gray-900">
                        General Information
                    </h5>
                </div>
                <div class="col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Property Name
                    </label>
                    <input value="{{ old('name') }}" type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex. Goya Boutique Resort" required>
                </div>
                <div class="col-span-2">

                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property
                        Area</label>
                    <select id="countries" name="area_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select property area</option>
                        @foreach ($areas as $area)
                            <option  value="{{ $area->id }}">{{ $area->location }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-span-2">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="goya-boutique-resort" value="{{ old('slug') }}" required>
                </div>
                <div class="col-span-2">
                    <label for="booking_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Booking
                        Link</label>
                    <input type="text" id="booking_link" name="booking_link"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="https://random-link.com" value="{{ old('booking_link') }}" required>
                </div>
                <div class="col-span-4">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea name="description"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>
                <div class="col-span-2">
                    <div class="flex items-center space-x-[8px] mb-2">
                        <label for="description" class="block text-sm font-medium text-gray-900 dark:text-white">Pool
                            Images</label>
                        <div @click="openPopover1 =! openPopover1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-gray-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="pool_images" name="pool_images[]" type="file" multiple>
                    <p x-cloak x-transition x-show="openPopover1" class="text-xs text-gray-500 mt-2">
                        Recommended Pictures should have <span class="font-bold">1920x1080</span> resolution. <br />
                        System will only accept these file extensions : <span class="font-bold">.jpg, .jpeg, .png,
                            .webp</span>
                    </p>

                </div>
                <div class="col-span-2">
                    <div class="flex items-center space-x-[8px] mb-2">
                        <label for="description" class="block text-sm font-medium text-gray-900 dark:text-white">Property
                            Images</label>
                        <div @click="openPopover2 =! openPopover2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-gray-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
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
                <div class="col-span-2">
                    <div class="flex items-center space-x-[8px] mb-2">
                        <label for="description"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Restaurant
                            Images</label>
                        <div @click="openPopover3 =! openPopover3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-gray-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="restaurant_images" name="restaurant_images[]" type="file" multiple>
                    <p x-cloak x-transition x-show="openPopover3" class="text-xs text-gray-500 mt-2">
                        Recommended Pictures should have <span class="font-bold">1920x1080</span> resolution. <br />
                        System will only accept these file extensions : <span class="font-bold">.jpg, .jpeg, .png,
                            .webp</span>
                    </p>

                </div>
                <div class="col-span-2">
                    <div class="flex items-center space-x-[8px] mb-2">
                        <label for="header_images" class="block text-sm font-medium text-gray-900 dark:text-white">Header
                            Images</label>
                        <div @click="openPopover4 =! openPopover4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-gray-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="header_images" name="header_images[]" type="file" multiple>
                    <p x-cloak x-transition x-show="openPopover4" class="text-xs text-gray-500 mt-2">
                        Recommended Pictures should have <span class="font-bold">1920x1080</span> resolution. <br />
                        System will only accept these file extensions : <span class="font-bold">.jpg, .jpeg, .png,
                            .webp</span>
                    </p>

                </div>
                <div class="col-span-2">
                    <div class="flex items-center space-x-[8px] mb-2">
                        <label for="header_images" class="block text-sm font-medium text-gray-900 dark:text-white">Room
                            Images</label>
                        <div @click="openPopover5 =! openPopover5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-gray-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="room_images" name="room_images[]" type="file" multiple>
                    <p x-cloak x-transition x-show="openPopover5" class="text-xs text-gray-500 mt-2">
                        Recommended Pictures should have <span class="font-bold">1920x1080</span> resolution. <br />
                        System will only accept these file extensions : <span class="font-bold">.jpg, .jpeg, .png,
                            .webp</span>
                    </p>

                </div>
                <hr class="col-span-4" />
                <div class="col-span-4">
                    <h5 class="text-lg font-bold text-gray-900">
                        Facilities
                    </h5>
                </div>
                <div class="col-span-2">
                    <label for="pool"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pool</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="pool-1" type="radio" value="1" name="pool" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="pool-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="pool-2" type="radio" value="0" name="pool"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="pool-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="bar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bar</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bar-1" type="radio" value="1" name="bar" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bar-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bar-2" type="radio" value="0" name="bar"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bar-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="sauna"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sauna</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="sauna-1" type="radio" value="1" name="sauna" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="sauna-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="sauna-2" type="radio" value="0" name="sauna"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="sauna-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="hot-tub" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hot
                        Tub</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="hot-tub-1" type="radio" value="1" name="hot_tub" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="hot-tub-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="hot-tub-2" type="radio" value="0" name="hot_tub"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="hot-tub-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="garden"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garden</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="garden-1" type="radio" value="1" name="garden" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="garden-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="garden-2" type="radio" value="0" name="garden"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="garden-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="non-smoking-room" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Non
                        Smoking Rooms</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="non-smoking-room-1" type="radio" value="1" name="non_smoking_room" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="non-smoking-room-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="non-smoking-room-2" type="radio" value="0" name="non_smoking_room" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="non-smoking-room-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="family-room" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Family
                        Rooms</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="family-room-1" type="radio" value="1" name="family_room" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="family-room-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="family-room-2" type="radio" value="0" name="family_room"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="family-room-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="jacuzzi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jacuzzi</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="jacuzzi-1" type="radio" value="1" name="jacuzzi" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="jacuzzi-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="jacuzzi-2" type="radio" value="0" name="jacuzzi"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="jacuzzi-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <hr class="col-span-4" />
                <div class="col-span-4">
                    <h5 class="text-lg font-bold text-gray-900">
                        Room Amenities
                    </h5>
                </div>
                <div class="col-span-2">
                    <label for="air_conditioning" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Air
                        Conditioner</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="air-conditioner-1" type="radio" value="1" name="air_conditioning" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="air-conditioner-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="air-conditioner-2" type="radio" value="0" name="air_conditioning"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="air-conditioner-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>

                </div>
                <div class="col-span-2">
                    <label for="balcony"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Balcony</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="balcony-1" type="radio" value="1" name="balcony" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="balcony-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="balcony-2" type="radio" value="0" name="balcony"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="balcony-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>

                </div>
                <div class="col-span-2">
                    <label for="tv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TV</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="tv-1" type="radio" value="1" name="tv" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="tv-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="tv-2" type="radio" value="0" name="tv"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="tv-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>

                </div>
                <div class="col-span-2">
                    <label for="electric-kettle"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Electric Kettle</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="electric-kettle-1" type="radio" value="1" name="electric_kettle" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="electric-kettle-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="electric-kettle-2" type="radio" value="0" name="electric_kettle"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="electric-kettle-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>

                </div>
                <div class="col-span-2">
                    <label for="clothes-rack" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clothes
                        Rack</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="clothes-rack-1" type="radio" value="1" name="clothes_rack" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="clothes-rack-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="clothes-rack-2" type="radio" value="0" name="clothes_rack"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="clothes-rack-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="hair-dryer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hair
                        Dryer</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="hair-dryer-1" type="radio" value="1" name="hair_dryer" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="hair-dryer-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="hair-dryer-2" type="radio" value="0" name="hair_dryer"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="hair-dryer-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="safety-box" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Safety
                        Deposit Box</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="safety-box-1" type="radio" value="1" name="safety_box" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="safety-box-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="safety-box-2" type="radio" value="0" name="safety_box"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="safety-box-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="desk"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desk</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="desk-1" type="radio" value="1" name="desk" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="desk-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="desk-2" type="radio" value="0" name="desk"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="desk-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="socket"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Socket</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="socket-1" type="radio" value="1" name="socket" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="socket-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="socket-2" type="radio" value="0" name="socket"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="socket-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="private_entrance"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Private Entrance</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="private-entrance-2" type="radio" value="1" name="private_entrance" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="private-entrance-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="private-entrance-2" type="radio" value="0" name="private_entrance"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="private-entrance-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="private_bathroom"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Private Bathroom</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="private-bathroom-2" type="radio" value="1" name="private_bathroom" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="private-bathroom-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="private-bathroom-2" type="radio" value="0" name="private_bathroom"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="private-bathroom-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="toilet_paper" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Toilet
                        Paper</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="toilet-paper-1" type="radio" value="1" name="toilet_paper" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toilet-paper-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="toilet-paper-2" type="radio" value="0" name="toilet_paper"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toilet-paper-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="shower"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shower</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="shower-1" type="radio" value="1" name="shower" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="shower-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="shower-2" type="radio" value="0" name="shower"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="shower-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="bathtub" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bath
                        Tub</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bathtub-1" type="radio" value="1" name="bathtub" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bathtub-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bathtub-2" type="radio" value="0" name="bathtub"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bathtub-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="slipper"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slipper</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="slipper-1" type="radio" value="1" name="slipper" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="slipper-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="slipper-2" type="radio" value="0" name="slipper"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="slipper-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="toileteries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Toileteries</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="toileteries-1" type="radio" value="1" name="toileteries" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toileteries-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="toileteries-2" type="radio" value="0" name="toileteries"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toileteries-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="minibar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minibar</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="minibar-1" type="radio" value="1" name="minibar" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="minibar-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="minibar-2" type="radio" value="0" name="minibar"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="minibar-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="refrigerator"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Refrigerator</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="refrigerator-1" type="radio" value="1" name="refrigerator" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="refrigerator-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="refrigerator-2" type="radio" value="0" name="refrigerator"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="refrigerator-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="tea-coffee-maker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tea
                        / Coffee Maker</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="tea-coffee-maker-1" type="radio" value="1" name="tea_coffee_maker" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="tea-coffee-maker-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="tea-coffee-maker-2" type="radio" value="0" name="tea_coffee_maker"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="tea-coffee-maker-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="smoke-alarm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Smoke
                        Alarm</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="smoke-alarm-1" type="radio" value="1" name="smoke_alarm" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="smoke-alarm-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="smoke-alarm-2" type="radio" value="0" name="smoke_alarm"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="smoke-alarm-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="fire-extinguisher"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fire Extinguisher</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="fire-extinguisher-1" type="radio" value="1" name="fire_extinguisher" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="fire-extinguisher-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="fire-extinguisher-2" type="radio" value="0" name="fire_extinguisher"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="fire-extinguisher-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="fire-extinguisher"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property Status</label>
                    <div class="grid grid-cols-2 gap-2 w-full">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="property-status-1" type="radio" value="1" name="property_status" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="property-status-1"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Live</label>
                        </div>
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="property-status-2" type="radio" value="0" name="property_status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="property-status-2"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Not
                                Live</label>
                        </div>
                    </div>
                </div>

                <div class="col-span-4">
                    <button class="bg-blue-700 w-full p-2 rounded-lg text-white font-medium">Submit</button>
                </div>
            </form>
        </div>
    </section>

    {{-- Display error messages from the store method on AdminProperty Controller --}}
    @if ($errors->any())

    <div class="max-w-3xl fixed bottom-5 right-5">
        <div class="max-w-3xl">
            <div class="flex p-4 mb-4 w-full text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
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
    </div>
    @endif

    <div class="px-5 py-5 md:px-12 lg:px-[100px]">


    </div>

@endsection
