<div class="py-2 bg-slate-200">
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
                <h1 class="text-3xl font-bold text-left text-black/90 md:px-10 lg:px-20 md:text-5xl">Hear what our
                    Doctors have to say</h1>
                <div
                    class="w-full h-full gap-5 text-center text-gray-900 carousel slideshow-container rounded-3xl md:gap-0">
                    {{-- item starts --}}

                    <div class="w-full mySlides fade rounded-3xl">
                        <div id="item1" class="w-full h-full carousel-item fade rounded-3xl">
                            <div
                                class="col-span-2 h-[25rem] flex items-center justify-center w-full   p-10 py-10 md:rounded-l-3xl">

                                <p class="text-xl font-normal"> GLH Consult is a wonderful platform. It’s helpful for
                                    providing proper guidance to patients to get their problems
                                    addressed and also for doctors to showcase their expertise.
                                    The app is very user-friendly and I would recommend it to all doctors!</p>
                            </div>

                        </div>
                    </div>
                    {{-- item starts --}}
                    <div class="w-full mySlides fade rounded-3xl">
                        <div id="item2" class="w-full h-full carousel-item fade rounded-3xl">
                            <div
                                class="col-span-2 h-[25rem] w-full  flex items-center justify-center p-10 py-10 md:rounded-l-3xl">

                                <p class="text-xl font-normal"> GLH Consult has been instrumental in helping me
                                    connect with patients. I’ve interacted with patients from Bangalore,
                                    Chandigarh, Mumbai and many other parts of India. Some patient even consulted with
                                    me online 4-5 times.</p>
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

        </div>
        <script type="text/javascript" src="{{ URL::asset('js/medicine.js') }}" defer></script>

    </div>
</div>