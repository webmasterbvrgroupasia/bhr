@extends('layouts.admin')

@section('page-title', 'Property Management')

@section('page-content')

    <section class="w-full py-16 space-y-4">
        <div class="max-w-7xl mx-auto p-4 drop-shadow-md grid grid-cols-12 gap-4 items-start">
            <div class="col-span-12 bg-white p-4 rounded grid grid-cols-12 items-center">
                <div class="w-full col-span-3">
                    <h1 class="font-medium text-lg">
                        Guest Feedback Database
                    </h1>
                </div>
                <div class="col-span-9 w-full flex justify-end items-end space-x-4">
                    <a href="{{ route('admin.feedback.download') }}"
                        class="flex items-center space-x-2 py-2.5 px-4 bg-white border border-neutral-200 text-sm font-medium text-neutral-900 hover:drop-shadow-md transition">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                        </div>
                        <div>
                            Download <span class="underline font-bold">all data</span> to Excel
                        </div>
                    </a>
                    <div>
                        <form action="{{ route('admin.feedback.download-with-filter') }}" method="GET"
                            class="flex space-x-2 items-end">
                            <div class="space-y-2">
                                <label for="from_date" class="font-medium text-sm text-neutral-600">From Date</label>
                                <input type="date" name="from_date" id="from_date"
                                    class="block py-2.5 rounded-md border border-neutral-200">
                            </div>
                            <div class="space-y-2">
                                <label for="end_date" class="font-medium text-sm text-neutral-600">From Date</label>
                                <input type="date" name="end_date" id="end_date"
                                    class="block py-2.5 rounded-md border border-neutral-200">
                            </div>
                            <div>
                                <button class="py-2.5 bg-black text-white px-4 rounded">Download</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto p-4 drop-shadow-md grid grid-cols-12 gap-4 items-start">
            <div class="col-span-12 bg-white space-y-8 p-4">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-neutral-50">
                            <td class="px-4 py-4 font-medium text-sm">
                                Full Name
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Email Addres
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Phone Number
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Nationality
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Stayed in
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Room (If Applicable)
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Subscriber to BVR Bulletin Insights
                            </td>
                            <td class="px-4 py-4 font-medium text-sm">
                                Submit Form Date
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($feedbacks as $feedback)
                            <tr class="border-b border-b-neutral-200">
                                @if (isset($feedback->last_name))
                                    <td class="px-4 py-4 text-sm font-light text-neutral-600">{{ $feedback->last_name }},
                                        {{ $feedback->first_name }}</td>
                                @else
                                    <td class="px-4 py-4 text-sm font-light text-neutral-600">{{ $feedback->first_name }}
                                    </td>
                                @endif
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">
                                    <p>
                                        {{ $feedback->email_address }}
                                    </p>
                                </td>
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">{{ $feedback->phone_number }}</td>
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">{{ $feedback->nationality }}</td>
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">
                                    @if ($feedback->unit == 'CC')
                                        Chillcorner
                                    @elseif($feedback->unit == 'CH')
                                        The Chillhouse Canggu
                                    @elseif($feedback->unit == 'BTS')
                                        BTS Villa
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">{{ $feedback->room }}</td>
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">

                                    @if ($feedback->subscribe_to_newsletter == 'yes')
                                        Yes
                                    @else
                                        No
                                    @endif

                                </td>
                                <td class="px-4 py-4 text-sm font-light text-neutral-600">{{ $feedback->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="w-full flex justify-end">
                    {{ $feedbacks->links() }}
                </div>
            </div>
        </div>
    </section>

@endsection
