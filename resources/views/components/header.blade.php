<header class="fixed block top-0 w-full z-50 bg-slate-900 items-center transition">
    <div class="container mx-auto relative z-50">
        <nav class="pt-5 lg:py-0 lg:px-4 xl:px-6 bg-slate-900 shadow-lg rounded-lg w-full right-4 top-full lg:shadow-none mx-auto">
            <ul class="flex mx-auto items-center justify-center gap-4 px-4">
                <li class="relative group">
                    <x-header-link href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white' : '' }}">Home</x-header-link>
                </li>
                <li class="relative group">
                    <x-header-link href="{{ route('shows') }}" class="{{ request()->routeIs('shows') ? 'text-white' : '' }}">Shows</x-header-link>
                </li>
                <li class="relative group">
                    <x-header-link href="{{ route('galleries') }}" class="{{ request()->routeIs('galleries') ? 'text-white' : '' }}">Galleries</x-header-link>
                </li>
            </ul>
        </nav>
    </div>

    <div class="absolute top-0 w-full h-[200px] [&>svg]:w-full [&>svg]:fill-[#0f172a] z-40 sep">
    </div>
</header>
