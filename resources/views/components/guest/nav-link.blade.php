@props(['active'])

@php
    $classes = ($active ?? false)
    ? 'text-black font-medium text-sm'
    : 'text-neutral-600 font-normal text-sm'
@endphp

<a {{$attributes->merge(['class'=>$classes])}}>
{{$slot}}
</a>