@extends('layouts.admin')

@section('page-title', 'Activity Management')

@section('page-content')
    <section class="grid grid-cols-12 pt-8 px-5 md:px-8 lg:px-[100px] gap-y-5">
        <div class="col-span-12 font-bold tracking-tight text-xl">
            Activity Management
            <p class="text-base font-normal w-1/2 text-neutral-500 leading-relaxed">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Aspernatur dolor fugiat, iure aliquid cupiditate rerum quaerat doloremque expedita non
                architecto voluptate, aperiam dignissimos. Quia, veritatis!</p>
            <a href="{{ route('activities.create') }}"
                class="block text-white bg-blue-500 hover:bg-blue-600 mt-2 rounded-md w-fit text-sm py-3 px-2">Add New
                Activity</a>
        </div>
    </section>
    <section class="grid grid-cols-12 px-5 md:px-12 lg:px-[100px] gap-x-5 gap-y-10 mt-4">
        @if (count($activities) < 1)
        <div class="col-span-12">
            <div class="bg-white py-5 drop-shadow-lg px-5 rounded-lg w-1/2">
                <div class="font-bold text-lg">
                    Oopsie!
                </div>
                <div>
                    No data to show at the moment, but we're working on it. In the meantime, take a break and watch some cat videos. They're data-free and paw-some!
                </div>
            </div>
        </div>
        @else
        <div class="col-span-12 flex items-center justify-end pb-4">

            <form action="/admin/activities/search" method="GET">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" name="search"
                        class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for items">
                </div>
            </form>
        </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg col-span-12">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $activity->name }}
                                </th>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $activity->location }}
                                </td>
                                <td class="px-6 py-4">
                                    {!! Str::limit($activity->description, 75) !!}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($activity->status == 1)
                                        <div class="text-green-400 w-full">
                                            Live
                                        </div>
                                    @else
                                        <div class="text-red-400 w-full">
                                            Not Live
                                        </div>
                                        
                                    @endif
                                </td>
                                <td class="px-6 py-4 flex space-x-4">
                                    <a href="{{ route('activities.edit', $activity->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form class="text-red-600 font-medium" method="POST" action="{{ route('activities.destroy', $activity->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <div class="col-span-12 flex justify-center">
            {{ $activities->links('pagination::tailwind') }}
        </div>
    </section>
    <div class="h-[50px] md:h-[75px] lg:h-10"></div>
@endsection
