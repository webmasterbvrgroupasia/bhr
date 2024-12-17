@extends('layouts.admin')

@section('page-title', 'Edit Blogpost')

@section('custom-styles')
    <script src="https://cdn.tiny.cloud/1/hfs386agsytuc6c69krcljr6jzoo8ctvzcyhmm3o4s9p4z6c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('page-content')


    <section class="grid grid-cols-12 pt-4 px-5 md:px-8 lg:px-[100px] gap-y-5">

        <nav class="col-span-12 flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/admin/dashboard"
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
                        <a href="{{ route('blogpost.index') }}"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Blogpost</a>
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Edit</span>
                    </div>
                </li>
            </ol>
        </nav>
    </section>
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
    <form enctype="multipart/form-data" method="POST" enctype="multipart/form-data"
          action="{{ route('blogpost.update', $blogpost->id) }}" class="grid grid-cols-12 gap-x-5 mt-4 px-5 md:px-8 lg:px-[100px] gap-y-5">
        @csrf
        @method('PUT')
        <div class="col-span-12 mt-5">
            <label for="location" class="font-semibold">Blogpost Title</label>
            <input type="text" name="title" id="title" placeholder="e.g Ubud" value="{{ $blogpost->title }}"
                   class="block w-1/3 py-2 px-2 mt-3 rounded-md">
        </div>
        <div class="col-span-12">
            <label for="slug" class="font-semibold">URL Slug</label>
            <div class="text-sm text-gray-400 font-normal">
                URL Slug is used to create a SEO-friendly link.
            </div>
            <input type="text" name="slug" id="slug" placeholder="e.g ubud" value="{{ $blogpost->slug }}"
                   class="block w-1/3 py-2 px-2 mt-3 rounded-md">
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Blogpost Image</label>
            <input type="file" name="image" class="block w-full mt-1 rounded-md" placeholder="" />
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Content</label>
            <textarea id="content" name="content">
                {{ $blogpost->content }}
            </textarea>
        </div>
        <div class="col-span-8">
            <label for="" class="font-semibold">Blogpost Status</label>
            <div class="flex mt-3">
                <div class="flex items-center mr-14">
                    <input id="status" type="radio" value="1" name="status" {{ $blogpost->status == '1' ?  'checked' : '' }}
                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                    <label for="property_status" class="ml-2 text-sm font-semibold text-gray-900">
                        Live
                        <div class="text-sm text-gray-400 font-normal">
                            Blogpost <span class="font-bold underline">WILL</span> be shown on the property list
                        </div>
                    </label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="status" type="radio" value="0" name="status" {{ $blogpost->status == '0' ?  'checked' : '' }}
                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                    <label for="status" class="ml-2 text-sm font-semibold text-gray-900">
                        Not Live
                        <div class="text-sm text-gray-400 font-normal">
                            Blogpost will <span class="font-bold underline">NOT</span> be shown on the property list
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

@section('custom-scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection
