@extends('layouts.admin')

@section('page-title', 'Special Offer Management')

@section('page-content')
    <section class="grid grid-cols-12 pt-8 px-5 md:px-8 lg:px-[100px] gap-y-5">
        <div class="col-span-12 font-bold tracking-tight text-xl flex items-center justify-between bg-white  py-4 px-4">
            <div>
                Special Offer or Packages Management
            </div>
            <div class="text-sm font-normal">
                <a href="{{route('special-offers.create')}}" class="py-2.5 bg-black text-white px-4 hover:bg-white hover:text-black hover:border transition">Add New Package or Offers</a>
            </div>
        </div>
        <div class="col-span-12 p-4 bg-white drop-shadow-md">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Package Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Slug
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Updated At
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offers as $offer)                        
                    <tr>
                        <td class="px-6 py-4 ">
                            {{$offer->package_name}}
                        </td>
                        <td class="px-6 py-4 ">
                            {{$offer->slug}}
                        </td>
                        <td class="px-6 py-4 ">
                            {{$offer->created_at}}
                        </td>
                        <td class="px-6 py-4 ">
                            {{$offer->updated_at}}
                        </td>
                        <td class="flex items-center space-x-2 justify-center px-6 py-4">
                            <a href="{{route('special-offers.edit',$offer->id)}}" class="hover:text-blue-500 transition">Edit</a>
                            <form action="{{route('special-offers.destroy',$offer->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="hover:text-red-500 transition">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    @endsection