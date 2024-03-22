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
                        You've supported BVR Bali Holiday Rentals by providing your valuable feedback. We hope you'll
                        come back and experience the best services from us!
                    </p>
                </div>
                <div class="w-full py-6 text-center rounded space-y-2"
                    style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-position:center; background-size:cover;">
                    <div class="font-extrabold text-2xl text-white">
                        Thank you!
                    </div>
                    <div class="text-neutral-200 text-sm px-4 leading-loose">
                        Your voucher will be sent to your email by our admin!
                    </div>
                </div>
                <form action="{{ route('guest.feedback.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="first_name" value="{{ $first_name }}" readonly id="">
                    <input type="hidden" name="last_name" value="{{ $last_name }}" readonly id="">
                    <input type="hidden" name="email_address" value="{{ $email_address }}" readonly id="">
                    <input type="hidden" name="phone_number" value="{{ $phone_number }}" readonly>
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
                                {{ $email_address }}
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="text-sm font-medium text-neutral-400">
                                Phone Number
                            </div>
                            <div class="text-sm">
                                {{ $phone_number }}
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="text-sm font-medium text-neutral-400">
                                Nationality
                            </div>
                            <div class="text-sm">
                                {{ $nationality }}
                            </div>
                        </div>
                    </div>
                </form>

                <a href="{{ route('welcome') }}"
                    class="block py-2.5 bg-white text-[#ff5700] text-center border border-neutral-200">Back to
                    Homepage</a>
            </section>
        </main>
    </section>
</body>

</html>
