<li class="py-12">
    <article>
        <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="col-span-1">
                @if ($gallery->getFirstMediaUrl())
                    <a href="{{ route('gallery', $gallery->id) }}" class="block w-full">
                        <img src="{{ $gallery->getFirstMediaUrl() }}" class="flex w-full border-2 border-gray-300 dark:border-gray-700 rounded-lg shadow-md hover:shadow-lg transition duration-300 hover:border-primary-500 dark:hover:border-primary-400" style="transition: border-color 0.3s ease-in-out;" />
                    </a>
                @endif
            </div>

            <div class="col-span-1 lg:col-span-2">
                <div>
                    <h2 class="text-2xl font-bold leading-8 tracking-tight text-gray-900 dark:text-gray-100">
                        <a href="{{ route('gallery', $gallery->id) }}" target="_blank" wire:navigate>{{ $gallery->title }}</a>
                    </h2>

                    @if ($gallery->published_at)
                        <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                            {!! $gallery->published_at->format('F j, Y') !!}
                        </div>
                    @endif
                </div>

                @if ($gallery->description)
                    <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                        {!! $gallery->description !!}
                    </div>
                @endif
            </div>
        </div>
    </article>
</li>
