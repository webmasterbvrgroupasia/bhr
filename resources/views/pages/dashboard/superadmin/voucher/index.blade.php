@extends('layouts.admin')

@section('page-title', 'Voucher Management')

@section('page-content')
    <section class="w-full py-16 space-y-4">
        <div class="max-w-7xl mx-auto p-4 drop-shadow-md grid grid-cols-12 gap-8 items-start">
            <div class="col-span-12 bg-white p-4 rounded grid grid-cols-12 items-center">
                <div class="w-full col-span-3">
                    <h1 class="font-medium text-lg">
                        Voucher Management Page
                    </h1>
                </div>
                <div class="col-span-9 w-full flex justify-end items-end space-x-4">
                    <a href="{{route('admin.vouchers.create')}}" class="py-2.5 bg-black text-white px-4 rounded">Issue New Voucher</a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto p-4 drop-shadow-md grid grid-cols-12 gap-4 items-start">
            <div class="col-span-12 bg-white space-y-8 p-4">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-neutral-50">
                            <td class="px-4 py-4 font-medium text-sm">
                                Voucher Code
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Title
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Inclusions
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Valid From
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Valid End
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vouchers as $voucher)
                            <tr class="items-center">
                                <td class="px-4 py-4 font-medium text-sm">
                                    {{$voucher->code}}
                                </td>
                                <td class="px-4 py-4 font-medium text-sm text-neutral-600">
                                    {{$voucher->title}}
                                </td>
                                <td class="px-4 py-4 font-medium text-sm text-neutral-600">
                                    {{$voucher->inclusions}}
                                </td>
                                <td class="px-4 py-4 font-medium text-sm text-neutral-600">
                                    {{$voucher->valid_date_start}}
                                </td>
                                <td class="px-4 py-4 font-medium text-sm text-neutral-600">
                                    {{$voucher->valid_date_end}}
                                </td>
                                <td class="space-y-2">
                                    <a href="{{route('admin.vouchers.select-user',$voucher->id)}}" class="text-xs font-medium text-white p-2 bg-blue-600 w-full block text-center">Send Voucher to Guest</a>
                                    <form action="{{route('admin.vouchers.disable',$voucher->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="text-xs font-medium text-white p-2 bg-red-600 w-full text-center">
                                            Disable
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @if (session('success'))        
    <div class="fixed bottom-5 right-5 p-4 bg-green-200 rounded drop-shadow">
         <div class="text-green-800 font-medium text-sm">
            Success!
         </div>
         <p class="text-sm text-green-600">
            {{ session('success') }}
         </p>
    </div>
    @endif
@endsection
