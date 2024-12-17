@extends('layouts.admin')

@section('page-title', 'Welcome')

@section('page-content')

    {{-- Modal Start --}}
    <section x-data="{ modalUpdate: false }">
        <section class=" pt-4 px-[100px]">
            <div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                  There has been some updates on the system. To view the details you can click <button class="underline" @click="modalUpdate = true">here</button>.
                </div>
                  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </div>
        </section>
        <div x-cloak x-transition x-show="modalUpdate"
            class="h-screen fixed flex items-center justify-center top-0 left-0 w-full bg-gray-900/60 z-50 backdrop-blur-sm"
            @click="modalUpdate=false">
            <div class="w-full">
                <div class="bg-white max-w-3xl mx-auto rounded-lg drop-shadow-lg">
                    <div class="flex justify-between p-2 border-b-[1px] border-b-neutral-300">
                        <div class="font-medium">
                            Update Notice
                        </div>
                        <div>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                  </svg>

                              </button>
                        </div>
                    </div>
                    <div class="p-10 h-auto overflow-y-scroll">
                        <div class="text-sm text-gray-600 space-y-[16px] leading-relaxed">
                            <p>
                                We are excited to announce an important update to our platform, addressing a known issue
                                with the Searchbar functionality. We have resolved the problem related to searching for
                                properties, areas, activities, and blog posts, ensuring a smoother user experience. Here are
                                the details of the fix:
                            </p>
                            <ul class="pl-4 list-decimal space-y-[8px]">
                                <li>Administrator now have to add amenities on every properties.</li>
                                <li>Administrator can now search for properties,areas,activities, and blogpost using various criteria, such as location, type, status, and more. The search results will accurately display the relevant properties based on the provided search parameters.</li>
                                <li>If adminsitrator failed to add either properties, activities, areas, etc. System will automatically redirect the user back to previous form with the old value for each input.</li>
                                <li>Added helping features. (Popovers) .</li>
                            </ul>
                            <p>
                                We value your feedback, and this update aims to improve your overall experience on our
                                platform. If you encounter any further issues or have suggestions for future updates, please
                                don't hesitate to reach out to our support team.

                                Thank you for using this platform, and we appreciate your continued support as we strive to
                                provide you with the best user experience possible.
                            </p>
                            <p>
                                Best,
                                <span class="block mt-4">Webmaster</span>
                            </p>
                            <div class="flex w-full justify-start space-x-[16px]">
                                <button @click="modalUpdate = false" class="px-2 py-2 bg-white text-blue-700 hover:text-white hover:bg-blue-700 transition border font-medium rounded-md">I Understand and wish to proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Modal Ends  --}}


    {{-- Main Section Start --}}
    <section class="bg-gray-50 py-4 min-h-screen px-[100px]">
        <div class="max-w-full">
            <div class="grid grid-cols-12 gap-5 max-w-full">
                <div class="col-span-8 bg-white rounded-lg border drop-shadow-md p-4 space-y-[24px]">
                    <div class="space-y-[8px]">
                        <div class="font-semibold text-gray-900">Properties</div>
                        <div class="text-gray-600 text-sm w-2/3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos itaque ipsa magnam
                            consequuntur eaque dolore. Culpa minima amet quaerat.
                        </div>
                        <a href="{{ route('properties.index') }}"
                            class="flex items-center space-x-[8px] text-sm bg-blue-700 w-fit px-3 py-2 rounded-md text-white hover:bg-blue-800 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>
                                Property List
                            </div>
                        </a>
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Property name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Area ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Property Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created At
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($property_overview as $po)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $po->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $po->area_id }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($po->property_status != 0)
                                                <span
                                                    class="bg-green-300 text-green-600 px-3 py-1 w-fit rounded-md">Live</span>
                                            @else
                                                <span class="bg-red-300 text-red-600 px-3 py-1 w-fit rounded-md">Not
                                                    Live</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $po->created_at }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-span-4 bg-white rounded-lg border drop-shadow-md p-4 space-y-[24px]">
                    <div class="space-y-[8px]">
                        <div class="font-semibold text-gray-900">Areas</div>
                        <div class="text-gray-600 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos itaque ipsa magnam
                            consequuntur eaque dolore. Culpa minima amet quaerat.
                        </div>
                        <a href="{{ route('areas.index') }}"
                            class="flex items-center space-x-[8px] text-sm bg-blue-700 w-fit px-3 py-2 rounded-md text-white hover:bg-blue-800 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>
                                Area List
                            </div>
                        </a>
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created At
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($area_overview as $ao)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $ao->location }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $ao->created_at }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Main Section End --}}
@endsection
