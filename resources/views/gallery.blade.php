@extends('_layout')

@section('content')
    <div class="container mx-auto max-w-4xl">
        <x-headline>{{ $gallery->title }}</x-headline>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($gallery->getMedia() as $image)
                <a href="{{ $image->getUrl() }}" data-lightbox="gallery" target="_blank"><img src="{{ $image->getUrl('thumb') }}" alt="{{ $gallery->title }}" class="w-full h-auto"></a>
            @endforeach
        </div>
    </div>
@endsection
