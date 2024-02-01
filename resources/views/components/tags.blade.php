@props(['tagsArray'])

@php
    $tags = explode(', ', $tagsArray);
@endphp

@foreach ($tags as $tag)
    {{ '#' . $tag }}
@endforeach
