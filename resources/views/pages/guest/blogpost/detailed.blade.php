@extends('layouts.main')

@section('custom-styles')
    <style>
        p {
            line-height: 150%;
            margin-bottom: 20px;
        }
        ol {
            list-style-type: number;
            padding-left:50px;
            margin-bottom:20px;
        }

        li {
            margin-bottom:10px;
        }
    </style>
@endsection

@section('page-header')
<header class="pb-10 h-[75vh] md:h-[75vh] lg:h-[85vh] pt-20 bg-black flex items-center justify-start tracking-tight"
        style="
background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{asset('storage/'.$post->image)}}');
background-size:cover;
background-position:center;
">
        <div class="px-2 py-8 md:py-8 lg:py-16 max-w-full md:max-w-3xl lg:max-w-4xl mx-auto space-y-[64px]">
            <div class="">
                <h1 class="leading-none text-4xl text-white font-extrabold">{{$post->title}}</h1>
            </div>
        </div>
    </header>
@endsection


@section('page-content')
<section class="px-2 py-8 md:py-8 lg:pb-16 max-w-full md:max-w-3xl lg:max-w-5xl mx-auto -mt-10 bg-white border rounded-lg drop-shadow-md text-gray-900">
    <section class="px-6 py-2 border-b-[1px] text-sm flex space-x-[12px]">
        <div>
            by <span class="font-medium">BVR Bali Holiday Rentals</span>
        </div>
        <div>
            {{$post->created_at}}
        </div>
    </section>
    <article class="px-6 py-12">
        
        {!! $post->content !!}
    </article>
</section>
@endsection
