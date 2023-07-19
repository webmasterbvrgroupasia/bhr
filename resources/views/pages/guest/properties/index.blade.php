@extends('layouts.main')

@section('page-title', 'Explore Our Properties')

@section('additional-style')
@endsection

@section('page-header')
    <header class="pb-10 h-[75vh] md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-start tracking-tight"
        style="
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1540541338287-41700207dee6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        background-size:cover;
        background-position:center;
    ">
        <div class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
            <div class="">
                <h1 class="text-base font-normal md:text-xl text-gray-400">Welcome to BVR Bali Holiday Rentals</h1>
                <h2 class="text-white leading-tight text-4xl md:text-6xl font-black">Our Curated Properties</h2>
            </div>
        </div>

    </header>
@endsection

@section('page-content')

    <section class="px-2 py-8 md:py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto space-y-[64px]">
        <div class="hidden md:block bg-white p-[10px] md:-mt-28 lg:-mt-16 rounded-lg border">
            <form method="POST" action="" class="grid grid-cols-2 lg:grid-cols-12 gap-[16px]">
                <div class="relative col-span-2 md:col-span-2 lg:col-span-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-gray-400">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Where to">
                </div>
                <div class="relative  col-span-2 md:col-span-1  lg:col-span-3">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-gray-400">
                            <path
                                d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd"
                                d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                clip-rule="evenodd" />
                        </svg>


                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Check In - Check Out">
                </div>
                <div class="relative col-span-2 md:col-span-1  lg:col-span-3">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-gray-400">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd" />
                        </svg>


                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-[14px]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="2 Adults, 1 Children">
                </div>
                <button
                    class="bg-blue-600 rounded-lg text-white w-full md:w-fit lg:w-full px-6 py-[14px] flex justify-center col-span-2 md:col-span-1  lg:col-span-2">
                    <div class="flex items-center space-x-[8px]">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                        <div>
                            Search
                        </div>
                    </div>
                </button>

            </form>
        </div>
        <div class="grid grid-cols-3 gap-5">
            @foreach ($properties as $property)
                @if ($property->images != '')
                    {{-- Extract first picture and store it in a variable --}}
                    @php
                        $value = $property->images;
                        
                        // Remove the array symbol and the quotes
                        $value = str_replace(['"'], '', $value);
                        
                        // Split the string into an array using the comma as delimiter
                        $images = explode(',', $value);
                        
                        $single_image = $images[2];
                        
                        $total_images = count($images);

                        $header_value = $property->header_images;

                        $header_value = str_replace(['"'],'',$header_value);

                        $single_header = explode(',',$header_value);

                        $single_header = $single_header[0];
                        
                        // You can now access each image path using a loop or by index
                        
                    @endphp
                    <div class="col-span-3 md:col-span-1 border bg-white">
                        
                        @if ($property->header_images)
                        <img src="{{ asset('storage/' . $single_header) }}"
                        class="h-44 w-full overflow-hidden object-cover" alt="Header Images">
                        @else
                        <img src="{{ asset('storage/' . $single_image) }}"
                        class="h-44 w-full overflow-hidden object-cover" alt="Ex Images">
                        @endif
                        <div class="font-semibold mt-4  px-5 pb-5">
                            {{ $property->name }}
                            <div class="font-normal text-gray-600">
                                <a class="text-blue-800"
                                    href="areas/{{ Str::lower($property->location) }}">{{ $property->location }}</a>,
                                Indonesia
                            </div>
                            <a href="/properties/{{ $property->slug }}" class="block font-medium text-blue-600">View
                                More Details</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="col-span-12">
            <div class="w-fit mx-auto">
                {{ $properties->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection

@section('additional-scripts')
    <script src="https://unpkg.com/flowbite@1.6.4/dist/flowbite.js"></script>
@endsection
