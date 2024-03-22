@extends('layouts.admin')

@section('page-title', 'Area Management')

@section('page-content')
    <section class="w-full py-16 space-y-4">
        <div class="max-w-7xl mx-auto p-4 drop-shadow-md grid grid-cols-12 gap-8 items-start">
            <div class="col-span-12 bg-white p-4 rounded grid grid-cols-12 items-center">
                <div class="w-full col-span-3">
                    <h1 class="font-medium text-lg">
                        Issue New Voucher
                    </h1>
                </div>
            </div>
            <div class="col-span-12 bg-white p-4 rounded grid grid-cols-12 items-center">
                <form action="{{ route('admin.vouchers.store') }}" method="POST" class="col-span-12 grid grid-cols-2 gap-4">
                    @csrf
                    <div class="space-y-2">
                        <label for="code" class="flex space-x-2 font-medium text-neutral-600">
                            <p>Code</p> <span class="text-xs text-red-600">*</span>
                        </label>
                        <input type="text" name="code" id="code" class="w-full rounded" placeholder="Voucher Code">
                    </div>
                    <div class="space-y-2">
                        <label for="title" class="flex space-x-2 font-medium text-neutral-600">
                            <p>Title</p> <span class="text-xs text-red-600">*</span>
                        </label>
                        <input type="text" name="title" id="title" class="w-full rounded" placeholder="Voucher Title">
                    </div>
                    <div class="space-y-2">
                        <label for="inclusions" class="flex space-x-2 font-medium text-neutral-600">
                            <p>Inclusions</p> <span class="text-xs text-red-600">*</span>
                        </label>
                        <input type="text" name="inclusions" id="inclusions" class="w-full rounded" placeholder="15% off, Breakfast, etc">
                    </div>
                    <div></div>
                    <div>
                        <label for="valid_date_start">Valid from</label>
                        <input type="date" name="valid_date_start" id="valid_date_start" class="w-full rounded" >
                    </div>
                    <div>
                        <label for="valid_date_end">Valid end</label>
                        <input type="date" name="valid_date_end" id="valid_date_end" class="w-full rounded" >
                    </div>
                    <div class="col-span-2">
                        <button type="submit" class="w-full py-2.5 bg-blue-600 text-white font-medium">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
