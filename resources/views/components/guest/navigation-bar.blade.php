<nav class="hidden md:hidden lg:block w-full py-4 fixed z-50 ">
    <div class="lg:max-w-4xl xl:max-w-6xl mx-auto p-4 bg-white drop-shadow-md grid grid-cols-12 gap-8 items-center">
        <div class="col-span-3">
            <img src="{{ asset('images/bhr-logo.png') }}" class="w-48" alt="BVR Bali Holiday Rentals">
        </div>
        <div class="col-span-7 space-x-4 flex justify-center">
            <x-guest.nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                Homepage
            </x-guest.nav-link>
            <x-guest.nav-link href="{{ route('guest.properties.index') }}" :active="request()->routeIs('guest.properties.*')">
                Bali Rentals
            </x-guest.nav-link>
            <x-guest.nav-link href="{{ route('guest.activities.index') }}" :active="request()->routeIs('guest.activities.*')">
                Bali Attractives
            </x-guest.nav-link>
            <x-guest.nav-link href="{{ route('guest.areas.index') }}" :active="request()->routeIs('guest.areas.*')">
                Areas
            </x-guest.nav-link>
            <x-guest.nav-link href="{{ route('guest.blogpost.index') }}" :active="request()->routeIs('guest.blogpost.*')">
                Blogpost
            </x-guest.nav-link>
            <x-guest.nav-link href="{{ route('guest.special-offers.index') }}" :active="request()->routeIs('guest.special-offers.*')">
                Special Offers
            </x-guest.nav-link>
        </div>
        <div class="col-span-2 flex justify-end">
            <a href="{{route('guest.contact-us')}}" class="p-2 text-[#ff5700] font-medium  text-sm">Contact Us</a>
        </div>
    </div>
</nav>

<nav class="block lg:hidden w-full py-4 px-4 md:px-0 fixed z-50" x-data="{ toggleMobileMenu: false }">
    <div class="max-w-full md:max-w-2xl mx-auto">
        <div class="p-4 bg-white grid grid-cols-2 items-center drop-shadow-md">
            <div>
                <img src="{{ asset('images/bhr-logo.png') }}" class="w-full md:w-44" alt="BVR Bali Holiday Rentals">
            </div>
            <div class="flex justify-end">
                <button @click="toggleMobileMenu =! toggleMobileMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75Zm7 10.5a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5a.75.75 0 0 1-.75-.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="col-span-2 py-4" x-show="toggleMobileMenu" x-cloak x-transition>
            <div class="bg-white p-4 drop-shadow-md grid gap-8">
                <x-guest.nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                    Homepage
                </x-guest.nav-link>
                <x-guest.nav-link href="{{ route('guest.properties.index') }}" :active="request()->routeIs('guest.properties.*')">
                    Bali Rentals
                </x-guest.nav-link>
                <x-guest.nav-link href="{{ route('guest.activities.index') }}" :active="request()->routeIs('guest.activities.*')">
                    Bali Attractives
                </x-guest.nav-link>
                <x-guest.nav-link href="{{ route('guest.areas.index') }}" :active="request()->routeIs('guest.areas.*')">
                    Areas
                </x-guest.nav-link>
                <x-guest.nav-link href="{{ route('guest.blogpost.index') }}" :active="request()->routeIs('guest.blogpost.*')">
                    Blogpost
                </x-guest.nav-link>
                <x-guest.nav-link href="{{ route('guest.special-offers.index') }}" :active="request()->routeIs('guest.special-offers.*')">
                    Special Offers
                </x-guest.nav-link>
                <x-guest.nav-link href="{{ route('guest.contact-us') }}" :active="request()->routeIs('guest.contact-us')">
                    Contact Us
                </x-guest.nav-link>
            </div>
        </div>

    </div>

</nav>
