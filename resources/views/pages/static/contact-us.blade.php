@extends('layouts.main')

{!!seo($seoData)!!}

@section('page-content')

<x-guest.header subTitle="Get in Touch with BVR Bali Holiday Rentals: Your Gateway to Bali Adventure"
mainTitle="Connect for Unforgettable Bali Experiences & Expert Guidance"
coverImage="https://images.unsplash.com/photo-1560626703-d93df43201c2?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

<section class="py-16 md:py-24 w-full">
    <div class="max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto px-4 md:px-0">
        <div class="grid md:grid-cols-2 items-center gap-8">
            <div class="space-y-4">
                <div class="space-y-2 max-w-lg col-span-2">
                    <h4 class="text-xl font-bold">Get in Touch with BVR Bali Holiday Rentals!</h4>
                    <p class="leading-relaxed font-light text-neutral-600">
                        Feel free to fill out this form, and our amazing team will get back to you as soon as possible!
                    </p>
                </div>
                <form action="" class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="first_name">First Name <span class="text-red-400">*</span></label>
                        <input type="text" name="first_name" id="first_name" placeholder="e.g John" class="w-full">
                    </div>
                    <div class="space-y-2">
                        <label for="last_name">Last Name <span class="text-red-400">*</span></label>
                        <input type="text" name="last_name" id="last_name" placeholder="e.g Doe" class="w-full">
                    </div>
                    <div class="space-y-2">
                        <label for="email_address">Email Address <span class="text-red-400">*</span></label>
                        <input type="email" name="email_address" id="email_address" placeholder="e.g john.doe@mail.com" class="w-full">
                    </div>
                    <div class="space-y-2">
                        <label for="phone_number">Phone Number <span class="text-red-400">*</span></label>
                        <input type="tel" name="phone_number" id="phone_number" placeholder="e.g +62 81234567890" class="w-full">
                    </div>
                    <hr>
                    <div class="col-span-2">
                        <button type="submit" class="py-2.5 w-full bg-[#ff5700] text-white">Contact!</button>
                    </div>
                </form>
            </div>
            <div class="h-96">
                <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1938&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
        </div>
    </div>
</section>

@endsection