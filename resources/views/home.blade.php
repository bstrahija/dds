@extends('_layout')

@section('content')
    <section id="home" class="relative overflow-hidden z-10 pb-14">
        <div class="container mx-auto mt-8 mb-14 px-4">
            <p class="font-medium text-lg md:text-xl leading-relaxed md:leading-relaxed text-slate-300 text-center my-7 opacity-90 mb-12 max-w-xl mx-auto">
                Post-hardcore band formed in late 2020 in Cakovec, Croatia. Band members are Igor Bistrovic (vocals, guitars), Kreso Zerjav (bass, vocals) and Boris Strahija (drums)
            </p>
        </div>

        <div class="container mx-auto">
            <div class="flex flex-wrap mx-[-16px]">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[1200px] text-center wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                        <h1 class="text-black font-bold text-3xl sm:text-4xl md:text-5xl leading-tight sm:leading-tight md:leading-tight mb-14">
                            <div class="flex justify-center max-w-3xl mx-auto"><img src="{{ asset('images/record-mockup.webp') }}" alt="Dead Dog Summer"></div>
                        </h1>

                        <h2 class="text-gray-300 font-bold text-3xl leading-tight sm:leading-tight md:leading-tight mb-5">
                            <a href="https://deaddogsummer.bandcamp.com/album/a-place-of-someday" class="hover:text-rose-800" target="_blank">A Place of Someday available NOW on vinyl</a>
                        </h2>

                        <p>Stream it now:</p>

                        <div class="flex mx-auto items-center justify-center gap-4 mt-4 mb-10">
                            <a href="https://open.spotify.com/album/2CIpzZG5qlHLAbXmpfiolg?utm_medium=share&utm_source=linktree" target="_blank">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#2ebd59]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"/></svg>
                                </span>
                            </a>
                            <a href="https://www.deezer.com/hr/album/327608127" target="_blank">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#ccc]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M451.5 244.7H576V172H451.5zm0-173.9v72.7H576V70.8zm0 275.1H576V273.2H451.5zM0 447.1H124.5V374.4H0zm150.5 0H275V374.4H150.5zm150.5 0H425.5V374.4H301zm150.5 0H576V374.4H451.5zM301 345.9H425.5V273.2H301zm-150.5 0H275V273.2H150.5zm0-101.2H275V172H150.5z"/></svg>
                                </span>
                            </a>
                            <a href="https://deaddogsummer.bandcamp.com/album/a-place-of-someday" target="_blank">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#ddd]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 8C119 8 8 119 8 256S119 504 256 504 504 393 504 256 393 8 256 8zm48.2 326.1h-181L207.9 178h181z"/></svg>
                                </span>
                            </a>
                            <a href="https://music.youtube.com/playlist?list=OLAK5uy_k5BXaGJksoSsH3i7TSS7WuAZkzHT9HDWc" target="_blank">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#cd201f]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                                </span>
                            </a>
                            <a href="https://music.amazon.com/albums/B0B44RTNT1" target="_blank">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#ddd]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"/></svg>
                                </span>
                            </a>
                        </div>

                        <p>Follow us:</p>

                        <div class="flex mx-auto items-center justify-center gap-4 my-4">
                            <a href="#facebook">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#1877f2]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. --><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" /></svg>
                                </span>
                            </a>
                            <a href="#instagram">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#c13584]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                      <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <!-- Believe it -->
                        <x-video src="https://www.youtube.com/embed/0kzrzQg6mm4?si=O9w84VgLCr2ebwhK" />

                        <!-- Scars -->
                        <x-video src="https://www.youtube.com/embed/Q63oBkbT530?si=gKzuat2I5P_xWt3A" />

                        <!-- Sometimes -->
                        <x-video src="https://www.youtube.com/embed/FJwluzZyhYM?si=4TqEkZXBFvcDVRWy" />

                        <!-- Diamonds and thorns -->
                        <x-video src="https://www.youtube.com/embed/jMeKyIDiOeQ?si=MhEmElzXkbe-jfsS" />
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
