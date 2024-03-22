@extends('layouts.admin')

@section('page-title', 'Area Management')

@section('page-content')
    <section class="w-full py-16 space-y-4">
        <div class="max-w-7xl mx-auto p-4 drop-shadow-md grid grid-cols-12 gap-4 items-start">
            <div class="col-span-12 bg-white p-4 rounded grid grid-cols-12 items-center">
                <div class="w-full col-span-3">
                    <h1 class="font-medium text-lg">
                        Send Voucher to User
                    </h1>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto drop-shadow-md grid grid-cols-12 gap-4 items-start p-4">
            <div class="col-span-12 space-y-2 bg-white p-4">
                <form action="{{route('admin.vouchers.send-email')}}" method="POST" class="grid grid-cols-2 gap-8">
                    @csrf
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-black ">
                            Voucher Code
                        </label>
                        <input type="text" name="code" value="{{$voucher->code}}" readonly class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-black ">
                            Voucher Title
                        </label>
                        <input type="text" name="title" value="{{$voucher->title}}" readonly class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-black ">
                            Inclusions
                        </label>
                        <input type="text" name="inclusions" value="{{$voucher->inclusions}}" readonly class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default">
                    </div>
                    <div></div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-black ">
                            Valid From
                        </label>
                        <input type="date" name="valid_date_start" value="{{$voucher->valid_date_start}}" readonly class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-black ">
                            Valid End
                        </label>
                        <input type="date" name="valid_date_end" value="{{$voucher->valid_date_end}}" readonly class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-black ">
                            Select User
                        </label>
                        <select name="user_id"
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default">
                            @foreach ($feedbacks as $feedback)
                                <option value="{{ $feedback->id }}">
                                    {{ $feedback->last_name }},{{ $feedback->first_name }} | {{ $feedback->email_address }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="col-span-2 py-2.5 bg-blue-600 w-full rounded text-white">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
