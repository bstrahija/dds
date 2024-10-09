@extends('_layout')

@section('content')
    <div class="container mx-auto max-w-4xl">
        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($yearlyShows as $year => $shows)
                <h2 class="text-center text-4xl font-bold leading-8 tracking-tight text-gray-900 dark:text-gray-100 pt-12 pb-12">{{ $year }} <small class="text-sm text-gray-500 dark:text-gray-400 font-normal">(Total: {{ count($shows) }})</small></h2>

                @foreach ($shows as $show)
                    <x-show :show="$show" />
                @endforeach
            @endforeach
        </ul>
    </div>
@endsection
