@extends('layouts.admin')

@section('page-title', 'User Management')

@section('page-content')
    <section class="grid grid-cols-12 pt-8 px-5 md:px-8 lg:px-[100px] gap-y-5">
        <div class="col-span-12 font-bold tracking-tight text-xl">
            User Management
            <p class="text-base font-normal w-1/2 text-neutral-500 leading-relaxed">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Aspernatur dolor fugiat, iure aliquid cupiditate rerum quaerat doloremque expedita non
                architecto voluptate, aperiam dignissimos. Quia, veritatis!</p>
            <a href="{{ route('users.create') }}"
                class="block text-white bg-blue-500 hover:bg-blue-600 mt-2 rounded-md w-fit text-sm py-3 px-2">Add New
                User</a>
        </div>
    </section>

    <section class="grid grid-cols-12 px-[100px]">
        <div class="col-span-12">
            
        </div>

    </section>
@endsection
