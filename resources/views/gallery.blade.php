@extends('_layout')

@section('content')
    <div class="container mx-auto max-w-4xl">
        <x-headline>{{ $gallery->title }}</x-headline>

        <div class="text-gray-500 dark:text-gray-400 text-center mt-[-2em] mb-10">
            {!! $gallery->published_at->format('F j, Y') !!}
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($gallery->getMedia() as $image)
                <a href="{{ $image->getUrl() }}" data-lightbox="gallery" target="_blank" class="block aspect-square">
                    <img src="{{ $image->getUrl() }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover">
                </a>
            @endforeach
        </div>
    </div>
@endsection
