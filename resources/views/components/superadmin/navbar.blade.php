<nav class="bg-white border-b-[1px] border-b-gray-100 grid grid-cols-12 py-4 px-[100px] items-center w-full">
    <section class="col-span-4">
        <a href="/">
            <img class="w-1/2" src="{{asset('images/logo-bhr-white.png')}}" alt="BVR Bali Holiday Rentals">
        </a>
    </section>
    <section class="col-span-6 text-sm tracking-tight text-left space-x-5">
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/properties">Properties</a>
        <a href="/admin/areas">Areas</a>
        <a href="/admin/activities">Activities</a>
        <a href="/admin/blogpost">Blogpost</a>
        <a href="/admin/users">User Management</a>
    </section>
    <section class="col-span-2" x-data="{ open: false }">
        <button @click="open = ! open" class="flex space-x-3 ml-auto items-center">
            <div class="rounded-full h-8 w-8 bg-neutral-400">
            </div>
            <div class="text-sm text-neutral-600">
                {{ Auth::user()->name }}
            </div>
        </button>
        <div class="fixed flex px-1 py-5 text-right space-y-5 rounded-2xl w-52 right-20 flex-col bg-white drop-shadow-md" x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            <form action="/logout" method="POST" class="text-sm">
                @csrf
                <button type="submit" class="text-left px-5 py-1 transition ease-in-out duration-300 text-sm w-full hover:bg-neutral-50">
                    Logout
                </button>
            </form>
        </div>
    </section>
</nav>
