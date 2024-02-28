<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Congratulations!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="h-screen bg-gray-50 flex items-center justify-center px-4 md:px-0">
        <main class="w-full ">
            <section class="max-w-full md:max-w-lg mx-auto p-4 bg-white drop-shadow-md space-y-4">
                <img src="{{ asset('images/bhr-logo.png') }}" class="w-44" alt="">
                <div class="space-y-2">
                    <h1 class="font-black text-2xl">
                        Congratulations!
                    </h1>
                    <p class="text-neutral-600 font-light leading-loose">
                        You've supported BVR Bali Holiday Rentals by providing your valuable feedback. We hope you'll come back and experience the best services from us!
                    </p>
                </div>
                <div class="w-full py-6 text-center rounded space-y-2" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-position:center; background-size:cover;">
                    <div class="font-extrabold text-2xl text-white">
                        15% Off
                    </div>
                    <div class="text-neutral-200 text-sm px-4 leading-loose">
                        For your next stay with BVR Bali Holiday Rentals.
                    </div>
                </div>
                <div class="p-4 border border-neutral-200 grid md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <div class="text-sm font-medium text-neutral-400">
                            Full name
                        </div>
                        <div class="text-sm">
                            @if (isset($last_name))
                                {{ $last_name }}, {{ $first_name }}
                            @else
                                {{ $first_name }}
                            @endif
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-sm font-medium text-neutral-400">
                            Email Address
                        </div>
                        <div class="text-sm text-wrap">
                            {{$email_address}}
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-sm font-medium text-neutral-400">
                            Phone Number
                        </div>
                        <div class="text-sm">
                            {{$phone_number}}
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-sm font-medium text-neutral-400">
                            Nationality
                        </div>
                        <div class="text-sm">
                            {{$nationality}}
                        </div>
                    </div>
                </div>
                <a href="{{ route('welcome') }}"
                    class="flex py-2.5 bg-[#ff5700] text-white items-center justify-center space-x-2 text-center border border-neutral-200">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm4.75 6.75a.75.75 0 0 1 1.5 0v2.546l.943-1.048a.75.75 0 0 1 1.114 1.004l-2.25 2.5a.75.75 0 0 1-1.114 0l-2.25-2.5a.75.75 0 1 1 1.114-1.004l.943 1.048V8.75Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div>
                        Send to my email
                    </div>
                </a>
                <a href="{{ route('welcome') }}"
                    class="block py-2.5 bg-white text-[#ff5700] text-center border border-neutral-200">Back to
                    Homepage</a>
            </section>
        </main>
    </section>
</body>

</html>
