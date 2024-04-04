@props(['mainTitle','subTitle','coverImage'])

<header class="h-[85vh] md:h-[85vh] flex items-center justify-center" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{$coverImage}}'); background-size:cover; background-position:center;">
    <section class="w-full">
        <div class="max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-auto space-y-2 px-4 md:px-0">
            <h1 class="text-xl font-normal text-neutral-300  leading-[150%]">
                {{$subTitle}}
            </h1>
            <h2 class="text-2xl md:text-5xl font-black text-white">
                {{$mainTitle}}
            </h2>
        </div>
    </section>
</header>
