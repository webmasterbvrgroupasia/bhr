@extends('layouts.testimonial')

@section('page-title','Testimonial')

@section('page-content')
    <section class="flex items-center justify-center h-screen bg-[#131312]">
        <div class="grid grid-cols-12 w-full md:w-full lg:w-full mx-auto">
            <form action="" method="post" class="space-y-4 col-span-12 px-5">
                @csrf
                <div>
                    <label class="text-white" for="">Name</label>
                    <input class="w-full rounded-md p-2" placeholder="Your Name" type="text" required name="name" id="">
                </div>
                <div>
                    <label class="text-white" for="">Email</label>
                    <input class="w-full rounded-md p-2" placeholder="Your Email" type="email" required name="name" id="">
                </div>
                <div>
                    <label class="text-white" for="">Review</label>
                    <textarea class="w-full rounded-md p-2" type="text" required name="review" id="" placeholder="Your Review"></textarea>
                </div>
                <button type="submit" class="block animate-pulse w-full text-center bg-white py-2 rounded-md font-bold">Submit Review!</button>

            </form>
        </div>
    </section>
@endsection