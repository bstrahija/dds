<li class="py-12">
    <article>
        <div class="grid gap-4 md:grid md:grid-cols-5">
            <dl>
                <dt class="sr-only">Scheduled at</dt>
                <dd class="relative text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                    <time>{{ $show->scheduled_at->format('F j, Y') }}</time>

                    @if ($show->scheduled_at->isFuture())
                        <div class="relative block mt-4 w-[100px]">
                            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#ff6b6b;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#feca57;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <path d="M0,50 Q25,0 50,50 T100,50" fill="none" stroke="url(#grad)" stroke-width="8" />
                                <path d="M0,50 Q25,100 50,50 T100,50" fill="none" stroke="url(#grad)" stroke-width="8" />
                            </svg>
                            <span class="relative w-full text-center z-10 px-3 py-1 text-xs font-bold text-sky-500 uppercase transform -rotate-12 inline-block">
                                Upcoming
                            </span>
                        </div>
                    @endif
                </dd>
            </dl>
            <div class="col-span-3">
                <div class="space-y-6">
                    <div>
                        <h2 class="text-2xl font-bold leading-8 tracking-tight text-gray-900 dark:text-gray-100">
                            @if ($show->venue_url)
                                <a href="{{ $show->venue_url }}" target="_blank" wire:navigate>{{ $show->title }}</a>
                            @else
                                {{ $show->title }}
                            @endif
                            <small class="text-gray-500 dark:text-gray-400 font-normal text-sm ml-1"> @ {{ $show->venue_name }}, {{ $show->city }}, {{ $show->country }}</small>
                        </h2>
                    </div>

                    @if ($show->description)
                        <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                            {!! $show->description !!}
                        </div>
                    @endif

                    @if ($show->lineup)
                        <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                            {!! $show->lineup !!}
                        </div>
                    @endif
                </div>

                <div class="text-base font-medium leading-6 pt-4">
                    @if ($show->galleries->count() > 0)
                        <a
                            class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                            href="{{ route('gallery', $show->galleries->first()->id) }}" wire:navigate>Gallery →</a>

                        @if ($show->venue_url)
                            <span class="text-gray-500 dark:text-gray-400 mx-4">|</span>
                        @endif
                    @endif

                    @if ($show->venue_url)
                        <a
                            class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                            href="{{ $show->venue_url }}" target="_blank">Venue →</a>
                    @endif
                </div>
            </div>

            <div class="">
                @if ($show->posterUrl())
                    <div>
                        <a href="{{ $show->posterUrl() }}" target="_blank">
                        <img src="{{ $show->posterUrl() }}" class="flex border-2 border-gray-300 dark:border-gray-700 rounded-lg shadow-md hover:shadow-lg transition duration-300 hover:border-primary-500 dark:hover:border-primary-400" style="transition: border-color 0.3s ease-in-out;" />
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </article>
</li>
