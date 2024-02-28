<nav class="bg-white border-b-[1px] border-b-gray-100 grid grid-cols-12 py-4 px-[100px] items-center w-full">
    <section class="col-span-2">
        <a href="/">
            <img class="w-full" src="{{ asset('images/bhr-logo.png') }}" alt="BVR Bali Holiday Rentals">
        </a>
    </section>
    <section class="col-span-8 text-sm tracking-tight text-center justify-center space-x-5 flex">
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/properties">Properties</a>
        <a href="/admin/areas">Areas</a>
        <div x-data="{ toggleActivitiesMenu: false }" class="relative">
            <button class="flex text-sm items-center space-x-2" @click="toggleActivitiesMenu =! toggleActivitiesMenu">
                <div>
                    Activities
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
            </button>
            <div x-cloak x-transition x-show="toggleActivitiesMenu"
                class="absolute text-xs space-y-2 mt-4 bg-white w-auto border py-2.5 px-4 drop-shadow-md z-50">
                <a href="{{ route('activities.index') }}" class="block">Manage Activities</a>
                <a href="{{ route('activity-categories.index') }}" class="block">Manage Categories</a>
            </div>
        </div>
        <a href="/admin/blogpost">Blogpost</a>
        <a href="/admin/users">User Management</a>
        <a href="/admin/special-offers">Special Offers</a>
        <a href="{{route('admin.feedback.index')}}">Feedback</a>
    </section>
    <section class="col-span-2" x-data="{ open: false }">
        <button @click="open = ! open" class="flex space-x-3 ml-auto items-center">
            <div class="rounded-full h-8 w-8 bg-neutral-400">
            </div>
            <div class="text-sm text-neutral-600">
                {{ Auth::user()->name }}
            </div>
        </button>
        <div class="fixed flex px-1 py-5 text-right space-y-5 rounded-2xl w-52 right-20 flex-col bg-white drop-shadow-md"
            x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            <form action="/logout" method="POST" class="text-sm">
                @csrf
                <button type="submit"
                    class="text-left px-5 py-1 transition ease-in-out duration-300 text-sm w-full hover:bg-neutral-50">
                    Logout
                </button>
            </form>
        </div>
    </section>
</nav>
