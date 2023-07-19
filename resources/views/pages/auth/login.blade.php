@extends('layouts.auth')

@section('page-title', 'Login')

@section('page-content')
    <section class="h-screen flex items-center justify-center px-5 md:px-12 lg:px-20">
        <div class="grid grid-cols-12 w-full">
            <div class="col-span-12">
                <img src="{{asset('images/logo-bhr.png')}}"
                    class="py-5 w-3/4 md:w-1/2 lg:w-1/6 mx-auto" alt="">
                <div
                    class="text-left w-full md:w-full lg:w-1/3 px-5 md:px-12 lg:px-12 py-12 mx-auto bg-white drop-shadow-xl border-[1px] rounded-2xl">
                    <div class="text-2xl md:text-3xl font-black tracking-tight">
                        Sign In To Your Account
                    </div>
                    {{-- Display Error Message when there's an error with the input --}}
                    @error('email')
                        <div class="rounded-md bg-[#FFF0F0] p-4 mt-8">
                            <p class="flex items-center text-sm font-medium text-[#BC1C21]">
                                <span class="pr-3">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10" cy="10" r="10" fill="#BC1C21"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.0002 5.54922C7.54253 5.54922 5.5502 7.54155 5.5502 9.99922C5.5502 12.4569 7.54253 14.4492 10.0002 14.4492C12.4579 14.4492 14.4502 12.4569 14.4502 9.99922C14.4502 7.54155 12.4579 5.54922 10.0002 5.54922ZM4.4502 9.99922C4.4502 6.93404 6.93502 4.44922 10.0002 4.44922C13.0654 4.44922 15.5502 6.93404 15.5502 9.99922C15.5502 13.0644 13.0654 15.5492 10.0002 15.5492C6.93502 15.5492 4.4502 13.0644 4.4502 9.99922Z"
                                            fill="white"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.0002 7.44922C10.304 7.44922 10.5502 7.69546 10.5502 7.99922V9.99922C10.5502 10.303 10.304 10.5492 10.0002 10.5492C9.69644 10.5492 9.4502 10.303 9.4502 9.99922V7.99922C9.4502 7.69546 9.69644 7.44922 10.0002 7.44922Z"
                                            fill="white"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.4502 11.9992C9.4502 11.6955 9.69644 11.4492 10.0002 11.4492H10.0052C10.309 11.4492 10.5552 11.6955 10.5552 11.9992C10.5552 12.303 10.309 12.5492 10.0052 12.5492H10.0002C9.69644 12.5492 9.4502 12.303 9.4502 11.9992Z"
                                            fill="white"></path>
                                    </svg>
                                </span>
                                There's something wrong with your credentials. Please try again.
                            </p>
                        </div>
                    @enderror

                    <form action="/login" method="POST" class="mt-8 space-y-8">
                        @csrf
                        <div>
                            <label for="" class=" tracking-tight">Email</label>
                            <input type="text" name="email" required class="w-full py-2 px-2 bg-neutral-50 mt-4 rounded-md"
                                id="" placeholder="name@company.com">
                        </div>
                        <div>
                            <label for="" class=" tracking-tight">Password</label>
                            <input type="password" name="password" required class="w-full py-2 px-2 bg-neutral-50 mt-4 rounded-md"
                                id="" placeholder="••••••••">
                        </div>
                        <button type="submit"
                            class="py-2 w-full bg-blue-600 hover:bg-blue-800 transition ease-in-out duration-300 text-white font-bold rounded-md">Log
                            In</button>
                    </form>
                    <div class="mt-8">
                        Not sure why you're here?
                        <a href="/" class="font-semibold tracking-tight">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
