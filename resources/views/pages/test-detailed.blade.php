<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Layout for Detailed Hotel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif !important;
        }
    </style>
</head>

<body class="py-8 px-4 md:px-4 md:py-8 lg:px-[200px]" x-data="{
    openImageLightbox1: false,
    openImageLightbox2: false,
    openImageLightbox3: false,
    openImageLightbox4: false,
    openImageLightbox5: false,

}">


    <div id="gallery" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 lg:h-[450px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                    class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                    class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                    class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                    class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                    class="absolute block max-w-full w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    {{-- Main Section Start --}}
    <main class="space-y-[24px] w-full mx-auto mt-2 md:mt-4 lg:mt-8">

        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="/properties"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Properties</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $title }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="leading-tight text-3xl font-extrabold">
            {{ $title }}
        </h1>
        <p class="text-lg font-normal">
        <div class="grid grid-cols-12 gap-x-7 items-start">
            <div class="col-span-12 md:col-span-8 space-y-[20px]">
                <div>
                    <div class="font-semibold text-gray-900">
                        Description
                    </div>
                    <p class="text-sm text-gray-500">
                        {{ $description }}
                    </p>
                </div>
                <div class="w-full rounded-md p-5 md:p-5 lg:p-12 text-center text-white font-bold space-y-[8px]"
                    style="
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1592147159165-58b53d9c37a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80');
                background-position: center;
                background-size:cover;
            ">
                    <p class="text-base md:text-base lg:text-lg">
                        Book Your Stay at {{ $title }}
                    </p>
                    <a href=""
                        class="bg-blue-600 block text-white w-fit px-4 py-2 text-sm rounded-md mx-auto">Book Now</a>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">
                        Room Facilities
                    </div>
                    <div class="flex flex-wrap gap-y-2 mt-3">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Non
                            Smoking Area</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Air
                            Conditioner</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Telephone</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Flat
                            Screen TV</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Smoke
                            Alarms</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Safe</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Smoke
                            Alarms</span>
                    </div>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">
                        Public Facilities
                    </div>
                    <div class="flex flex-wrap gap-y-2 mt-3">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Parking
                            Area</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Outdoor
                            Swimming Pool</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Free
                            Wifi</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Beachfront</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Airport
                            Shuttle</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs md:text-sm font-medium mr-2 px-2.5 py-1 rounded dark:bg-blue-900 dark:text-blue-300">Fitness
                            Center</span>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:col-span-4 space-y-[32px]">
                <div class="p-5 border-[1px] border-gray-300 rounded-md bg-white drop-shadow-md space-y-[24px]">

                    <div class="uppercase text-sm font-bold">
                        Activity Picks
                    </div>
                    {{-- Looping Activity Cards from query --}}
                    <a href="#" class="flex space-x-[10px] items-center">
                        <div>
                            <img class="object-cover rounded-md w-12 h-12"
                                src="https://images.unsplash.com/photo-1596698054409-7dc6148db975?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="text-base text-gray-900 font-medium">
                            Activity Title
                        </div>
                    </a>
                    <a href="#" class="flex space-x-[10px] items-center">
                        <div>
                            <img class="object-cover rounded-md w-12 h-12"
                                src="https://images.unsplash.com/photo-1527547637224-a93d42c7b332?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="text-base text-gray-900 font-medium">
                            Activity Title
                        </div>
                    </a>
                    <a class="flex space-x-[10px] items-center">
                        <div>
                            <img class="object-cover rounded-md w-12 h-12"
                                src="https://images.unsplash.com/photo-1527547100461-6ff4d7f95dd0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="text-base text-gray-900 font-medium">
                            Activity Title
                        </div>
                    </a>
                </div>
                <div class="p-5 border-[1px] border-gray-300 rounded-md bg-white drop-shadow-md space-y-[12px]">
                    <div class="uppercase text-sm font-bold">
                        Get the best rate from BVR Bali Holiday Retnals delivered to your inbox
                    </div>
                    <div class="text-sm font-normal">
                        Subscribe our newsletter for latest bali news and promotion. Let's stay updated!
                    </div>
                    <form action="">
                        <div class="mb-4">
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John Doe" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" id="email" placeholder="john@mail.com"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <button type="submit"
                            class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div x-data="{ openDrawer: false }" class="fixed bottom-5 right-5">
            <div class="" x-transition x-show="openDrawer">
                <a href="" class="block">Whatsapp</a>
                <a href="" class="block">Email</a>
            </div>
            <button @click="openDrawer =! openDrawer">
                Need Help?
            </button>

        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="col-span-2 md:col-span-3">
                <div class="font-semibold">
                    Gallery
                </div>
            </div>
            <div>
                <button @click="openImageLightbox1 =! openImageLightbox1">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </button>
                </button>
            </div>
            <div>
                <button @click="openImageLightbox2 =! openImageLightbox2">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </button>
            </div>
            <div>
                <button @click="openImageLightbox3 =! openImageLightbox3">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </button>
            </div>
            <div>
                <button @click="openImageLightbox4 =! openImageLightbox4">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </button>
            </div>
            <div>
                <button @click="openImageLightbox5 =! openImageLightbox5">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </button>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
            </div>
        </div>

    </main>
    {{-- Main Section End --}}

    {{-- Image Lightboxes Section Start --}}
    <div class="fixed top-0 left-0 w-full h-screen px-4 bg-white/20 backdrop-blur-md flex items-center justify-center"
        @click="openImageLightbox1=false" x-transition x-show="openImageLightbox1">
        <img class="h-96 max-w-full rounded-lg  object-cover"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div class="fixed top-0 left-0 w-full h-screen px-4 bg-white/20 backdrop-blur-md flex items-center justify-center"
        @click="openImageLightbox2=false" x-transition x-show="openImageLightbox2">
        <img class="h-96 max-w-full rounded-lg object-cover"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
    </div>
    <div class="fixed top-0 left-0 w-full h-screen px-4 bg-white/20 backdrop-blur-md flex items-center justify-center"
        @click="openImageLightbox3=false" x-transition x-show="openImageLightbox3">
        <img class="h-96 max-w-full rounded-lg  object-cover"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
    </div>
    <div class="fixed top-0 left-0 w-full h-screen px-4 bg-white/20 backdrop-blur-md flex items-center justify-center"
        @click="openImageLightbox4=false" x-transition x-show="openImageLightbox4">
        <img class="h-96 max-w-full rounded-lg  object-cover"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
    </div>
    <div class="fixed top-0 left-0 w-full h-screen px-4 bg-white/20 backdrop-blur-md flex items-center justify-center"
        @click="openImageLightbox5=false" x-transition x-show="openImageLightbox5">
        <img class="h-96 max-w-full rounded-lg  object-cover"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
    </div>
    {{-- Image Lightboxes Section End --}}
</body>

</html>
