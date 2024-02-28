<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="h-screen bg-gray-50 flex items-center justify-center px-4 md:px-0">
        <main class="w-full">
            <section class="max-w-full md:max-w-lg mx-auto p-4 bg-white drop-shadow-md space-y-4">
                <img src="{{ asset('images/bhr-logo.png') }}" class="w-44" alt="">
                <div class="space-y-2">
                    <h1 class="font-black text-2xl">
                        Thank you.
                    </h1>
                    <p class="text-neutral-600 font-light leading-loose">
                        You've supported BVR Bali Holiday Rentals by providing your valuable feedback. We hope you'll come back and experience the best services from us!
                    </p>
                </div>
                <a href="{{ route('welcome') }}" class="block py-2.5 bg-[#ff5700] text-white text-center">Back to
                    Homepage</a>
            </section>
        </main>
    </section>
</body>

</html>
