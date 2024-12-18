@extends('layouts.admin')

@section('page-title', 'Activity Management')

@section('custom-styles')
    <script src="https://cdn.tiny.cloud/1/hfs386agsytuc6c69krcljr6jzoo8ctvzcyhmm3o4s9p4z6c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

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
                        <a href="{{route('activities.index')}}"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Activities</a>
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Add New Activities</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="col-span-12 font-bold tracking-tight text-xl">
            Add New Activity
        </div>
    </section>


    <section class="max-w-7xl">
        <form enctype="multipart/form-data" method="POST" enctype="multipart/form-data"
              action="{{ route('activities.store') }}"
              class="grid grid-cols-12 gap-x-5 mt-4 px-5 md:px-8 lg:px-[100px] gap-y-5">
            @csrf
            <div class="col-span-4">
                <label for="name" class="font-semibold">Activity Name</label>
                <input type="text" name="name" id="name" placeholder="e.g The Chillhouse Canggu"
                       class="block w-full py-2 px-2 mt-3" value="{{old('name')}}">
            </div>
            <div class="col-span-4">
                <label for="" class="font-semibold">Area</label>
                <select name="area_id" id="area_id" class="block w-full py-2 px-2 mt-3">
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->location }}</option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="col-span-8">
                <label for="" class="font-semibold">Category</label>
                <select name="category_id" id="category_id" class="block w-full py-2 px-2 mt-3">
                    @foreach ($categories as $category)
                        <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-8">
                <label for="name" class="font-semibold">URL Slug</label>
                <div class="text-sm text-gray-400 font-normal">
                    URL Slug is used to create a SEO-friendly link.
                </div>
                <input type="text" name="slug" id="slug" placeholder="e.g the-chillhouse-canggu"
                       class="block w-full py-2 px-2 mt-3" value="{{old('slug')}}">
            </div>

            <div class="col-span-8">
                <label for="inclusions" class="font-semibold">Inclusion</label>

                <textarea name="inclusions"  class="block w-full px-2 py-2 leading-relaxed mt-3"
                          placeholder="e.g Join a 7 to 8-hour bird-watching experience. Bali is known for its abundance of bird species, with more than 100 different birds having been already registered. Bird watching experience lasts for half a day."
                          id="tinymce"></textarea>
            </div>

            <div class="col-span-8">
                <label for="" class="font-semibold">Activity Images</label>
                <input type="file" name="images[]" class="block w-full mt-1 rounded-md" placeholder="" multiple />
            </div>
            <div class="col-span-8 space-y-3">
                <label for="" class="font-semibold">Description</label>
                <textarea name="description" class="block w-full px-2 py-2 leading-relaxed mt-3"
                          placeholder="e.g Join a 7 to 8-hour bird-watching experience. Bali is known for its abundance of bird species, with more than 100 different birds having been already registered. Bird watching experience lasts for half a day."
                          id="tinymce"></textarea>
            </div>
            <div class="col-span-8 mt-3 space-y-2">
                <label for="" class="font-semibold">Price</label>
                <div class="flex items-center">
                <span
                    class="h-full rounded-tl-md rounded-bl-md border border-r-0 border-stroke bg-gray-1 py-3 px-4 text-base uppercase text-body-color">
                    IDR
                </span>
                    <input type="num" name="price" id="price" placeholder="250000"
                           class="w-full rounded-br-md rounded-tr-md border border-form-stroke p-3 pl-5 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                </div>
                <div class="col-span-8 mt-5 space-y-1">
                    <label for="" class="font-semibold">Booking Link</label>
                    <div class="flex items-center">
                        <input type="text" name="booking_link" id="booking_link" value="{{old('booking_link')}}" placeholder="e.g https://random-link.com"
                               class="block w-full py-2 px-2 mt-3">
                    </div>
                </div>
                <div class="col-span-8 mt-5">
                    <label for="" class="font-semibold">Youtube Encode</label>
                    <div class="flex items-center">
                        <input type="text" name="youtube_url" id="booking_link" value="{{old('youtube_url')}}" placeholder="e.gqweq4"
                               class="block w-full py-2 px-2 mt-3">
                    </div>
                </div>
                <div class="col-span-8 mt-3 space-y-3">
                    <label for="" class="font-semibold">Activity Status</label>
                    <div class="flex">
                        <div class="flex items-center mr-14">
                            <input id="status" type="radio" value="1" name="status"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                            <label for="status" class="ml-2 text-sm font-semibold text-gray-900">
                                Live
                                <div class="text-sm text-gray-400 font-normal">
                                    Activity <span class="font-bold underline">WILL</span> be shown on the Activity list
                                </div>
                            </label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="status" type="radio" value="0" name="status"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                            <label for="status" class="ml-2 text-sm font-semibold text-gray-900">
                                Not Live
                                <div class="text-sm text-gray-400 font-normal">
                                    Activity will <span class="font-bold underline">NOT</span> be shown on the Activity list
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
    </section>
    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection

@section('custom-scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection
