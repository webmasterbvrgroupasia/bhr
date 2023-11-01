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
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg col-span-12">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white border-b-[1px] dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Room Area
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Maximum Adult
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Maximum Child
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price Range
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($property->room_type as $roomtype)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $roomtype->name }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $roomtype->room_area }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $roomtype->price_per_night }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $roomtype->maximum_adult }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $roomtype->maximum_child }}
                        </th>
                        <td class="px-6 py-4 flex items-center space-x-4">
                            <a href="{{ route('room-type.edit', $roomtype->id) }}"
                               class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>


                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="text-red-600 font-medium" type="button">
                                Delete
                            </button>

                            <div id="popup-modal" tabindex="-1"
                                 class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-hide="popup-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <svg aria-hidden="true"
                                                 class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                Are you sure you want to delete this room?</h3>
                                            <form method="POST"
                                                  class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                                                  action="{{ route('room-type.destroy', $roomtype->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit">Yes, I'm sure</button>
                                            </form>
                                            <button data-modal-hide="popup-modal" type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <div class="h-[50px] md:h-[75px] lg:h-[100px]"></div>
@endsection
