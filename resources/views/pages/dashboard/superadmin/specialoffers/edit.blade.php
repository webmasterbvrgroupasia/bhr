@extends('layouts.admin')

@section('page-title', 'Special Offer Management')

@section('page-content')
    <section class="grid grid-cols-12 gap-y-5 max-w-7xl mx-auto py-8">
        <div class="col-span-12 font-bold tracking-tight text-xl flex items-center justify-between bg-white">
            <div>
                Edit Existing Package
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto pb-24">
        <div class="max-w-3xl border px-4 py-4 bg-white">
            <form action="{{ route('special-offers.update',$offer->id) }}" class="grid grid-cols-2 gap-4" enctype="multipart/form-data"
                method="POST">
                @method('put')
                @csrf
                <div class="col-span-2 font-medium text-sm">
                    Package SEO Section
                </div>
                <div class="space-y-2">
                    <label for="meta_keywords" class="text-sm font-normal text-neutral-700">Meta Keywords</label>
                    <input type="text" required name="meta_keywords" id="meta_keywords"
                        class="w-full text-sm py-2.5 border-neutral-300" placeholder="Keyword 1, Keyword 2, Keyword 3" value="{{$offer->meta_keywords}}">
                </div>
                <div class="space-y-2">
                    <label for="meta_description" class="text-sm font-normal text-neutral-700">Meta Description</label>
                    <input type="text" required name="meta_description" id="meta_description"
                        class="w-full text-sm py-2.5 border-neutral-300"
                        placeholder="This is a sample meta description for this package"  value="{{$offer->meta_description}}">
                </div>
                <hr class="col-span-2">
                <div class="col-span-2 font-medium text-sm">
                    Package General Information
                </div>
                <div class="space-y-2">
                    <label for="package_name" class="text-sm font-normal text-neutral-700">Package Name</label>
                    <input type="text" required name="package_name" id="package_name"
                        class="w-full text-sm py-2.5 border-neutral-300" placeholder="Example Package" value="{{$offer->package_name}}">
                </div>
                <div class="space-y-2">
                    <label for="slug" class="text-sm font-normal text-neutral-700">Package Slug</label>
                    <input type="text" required name="slug" id="slug"
                        class="w-full text-sm py-2.5 border-neutral-300" placeholder="example-package" value="{{$offer->slug}}">
                </div>
                <div class="space-y-2">
                    <label for="description" class="text-sm font-normal text-neutral-700">Package Description</label>
                    <textarea required name="description" id="description" class="w-full border-neutral-300 text-sm py-2.5"
                        placeholder="Package Description">
                        {{$offer->description}}
                    </textarea>
                </div>
                <div class="space-y-2">
                    <div>
                        <label for="inclusions" class="text-sm font-normal text-neutral-700">Inclusions</label>
                        <label for="" class="block text-xs text-neutral-500">Separate using comma.</label>
                    </div>
                    <input type="text" required name="inclusions" id="inclusions"
                        class="w-full text-sm py-2.5 border-neutral-300" placeholder="One Night Stay at Sampatti Villa,One Hour Balinese Massage" value="{{$offer->inclusions}}">
                </div>
                <div class="space-y-2">
                    <label for="image" class="text-sm font-normal text-neutral-700">Package Image</label>
                    <input type="file" value="{{$offer->image}}" name="image" id="" class="w-full text-sm border-neutral-300">
                </div>
                <div class="space-y-2">
                    <label for="related_images" class="text-sm font-normal text-neutral-700">Related Image</label>
                    <input type="file" name="related_images[]" id="related_images" class="w-full text-sm border-neutral-300" multiple>
                </div>
                <div class="space-y-2">
                    <label for="additional_notes" class="text-sm font-normal text-neutral-700">Additional Notes</label>
                    <input required type="text" name="additional_notes" id="additional_notes"
                        class="w-full text-sm py-2.5 border-neutral-300" placeholder="Example Notes for this package" value="{{$offer->additional_notes}}">
                </div>
                <div class="space-y-2">
                    <label for="booking_link" class="text-sm font-normal text-neutral-700">Booking Link</label>
                    <input required type="text" name="booking_link" id="booking_link"
                        class="w-full text-sm py-2.5 border-neutral-300" placeholder="Leave empty if no link." value="{{$offer->booking_link}}">
                </div>
                <div class="col-span-2">
                    <button type="submit" class="bg-blue-500 w-full py-2.5 text-white text-sm">Submit</button>
                </div>
            </form>
        </div>

    </section>

    @if ($errors->any())

        <div class="fixed bottom-5 right-5">
            <div class=" p-5 bg-red-200 drop-shadow-md">
                <div class="text-red-800 text-xs">
                    There are some error with your input:
                </div>
                <div class="mt-2">
                    <ul class="text-red-800 text-xs">
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection
