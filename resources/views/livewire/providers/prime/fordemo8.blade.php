<div class="bg-white">
    <div class="mt-10 max-h-[200rem] w-full  p-2 md:w-2/3 mx-auto ">
        <div class="flex items-center justify-start flex-auto w-full h-full md:justify-center">
            {{-- prev button --}}
            <button aria-label="slide backward" onclick="plusSlides(-1)"
                class="absolute z-30 ml-10 font-bold cursor-pointer md:left-20 xl:left-40 left-3 prev text-slate-700 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2"
                id="prev">

                <svg class="dark:text-gray-900" width="15" height="20" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>


            </button>
            <div class="w-full mx-auto">
                {{-- carousel start --}}
                <h1 class="py-4 text-2xl font-bold text-center text-black/90 md:px-10 lg:px-20 md:text-4xl">Still need a
                    reason to go
                    Prime?
                    Here’s what patients say about their experience!</h1>
                <div
                    class="w-full h-full gap-5 text-center text-gray-900 carousel slideshow-container rounded-3xl md:gap-0">
                    {{-- item starts --}}

                    <div class="w-full mySlides fade rounded-3xl">
                        <div id="item1" class="w-full h-full  carousel-item fade rounded-3xl">
                            <div
                                class="col-span-2 h-[22rem] flex items-center justify-center w-full   p-10 py-10 md:rounded-l-3xl">

                                <p class="text-xl font-normal"> Our in-house pharmacists ensure your
                                    medicines reach you when you need them</p>
                            </div>

                        </div>
                    </div>
                    {{-- item starts --}}
                    <div class="w-full mySlides fade rounded-3xl">
                        <div id="item2" class="w-full h-full  carousel-item fade rounded-3xl">
                            <div
                                class="col-span-2 h-[22rem] w-full  flex items-center justify-center p-10 py-10 md:rounded-l-3xl">

                                <p class="text-xl font-normal"> From Amritsar to Port Blair, we home
                                    deliever medicines & health products all over india</p>
                            </div>

                        </div>
                    </div>
                    {{-- item starts --}}
                    <div class="w-full mySlides fade rounded-3xl">
                        <div id="item3" class="flex w-full h-full carousel-item fade rounded-3xl ">

                            <div
                                class="col-span-2 h-[22rem] w-full flex items-center justify-center  p-10 py-12 md:rounded-l-3xl">

                                <p class="text-xl font-normal"> All medicines & health products are sourced
                                    from GLH
                                    trusted network of verified pharmacies and medical stores</p>
                            </div>

                        </div>
                    </div>
                    {{-- item starts --}}
                    <div class="w-full mySlides fade rounded-3xl">
                        <div id="item4" class="flex w-full h-full carousel-item fade rounded-3xl">

                            <div
                                class="col-span-2 h-[22rem] w-full  flex items-center justify-center p-10 py-12 md:rounded-l-3xl">

                                <p class="text-xl font-normal"> Exhaustive information about medicines
                                    written by verified medical exports</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- next slide --}}
            <button aria-label="slide forward" onclick="plusSlides(1) "
                class="absolute z-30 mr-10 font-bold md:right-20 xl:right-40 right-3 next lg text-slate-700 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2"
                id="next">
                <svg class="dark:text-gray-900" width="15" height="20" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            {{-- carousel end --}}
            {{-- carousel button --}}

            {{-- carousel button end --}}
        </div>
        <div class="flex justify-center w-full gap-3">
            <button onclick="currentSlide(1)"
                class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</button>
            <button onclick="currentSlide(2)"
                class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</button>
            <button onclick="currentSlide(3)"
                class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</button>
            <button onclick="currentSlide(4)"
                class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</button>
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/medicine.js') }}" defer></script>

    </div>
</div>