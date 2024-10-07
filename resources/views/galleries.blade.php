@extends('_layout')

@section('content')
    <div class="container mx-auto max-w-4xl">
        <x-headline>Galleries</x-headline>

        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($galleries as $gallery)
                <x-gallery-link :gallery="$gallery" />
            @endforeach
        </ul>
    </div>
@endsection
