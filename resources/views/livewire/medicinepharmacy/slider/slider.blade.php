<div class="mt-44 max-h-[200rem] w-full bg-white/80 p-2 dark:bg-gray-600/50 md:mt-10 md:p-10">
  <div class="flex items-center justify-start flex-auto w-full h-full">
    {{-- prev button --}}
    <button aria-label="slide backward" onclick="plusSlides(-1)"
      class="absolute left-0 z-30 ml-10 font-bold cursor-pointer prev text-slate-700 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2"
      id="prev">

      <svg class="dark:text-gray-900" width="15" height="20" viewBox="0 0 8 14" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>


    </button>
    <div class="w-full mx-auto">
      {{-- carousel start --}}

      <div class="w-full h-full gap-5 text-gray-900 carousel slideshow-container rounded-3xl md:gap-0">
        {{-- item starts --}}
        <div class="mySlides fade rounded-3xl">
          <div id="item1" class="grid w-full h-full carousel-item fade md:grid-cols-3">
            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-stone-300/30 p-8 py-12 md:rounded-l-3xl">

              <p class="py-4 pt-3 font-sans text-lg font-bold text-stone-800/70"> FAST
                HEALTHCARE</p>
              <p class="py-4 text-5xl font-black">Reliable in time home delivery</p>
              <p class="text-xl font-normal"> Our in-house pharmacists ensure your
                medicines reach you when you need them</p>


            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/28.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full md:rounded-r-3xl" alt="i2" />
            </div>
          </div>
        </div>
        {{-- item starts --}}
        <div class="w-full mySlides fade rounded-3xl">
          <div id="item2" class="grid w-full h-full carousel-item fade rounded-3xl md:grid-cols-3">
            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-blue-300/20 p-10 py-10 md:rounded-l-3xl">
              <p class="py-4 pt-3 font-sans text-lg font-bold text-blue-800/70">AVAILABLE
                EVERYWHERE</p>
              <p class="py-4 text-5xl font-black">Delivering in 100+ cities all over india
              </p>
              <p class="text-xl font-normal"> From Amritsar to Port Blair, we home
                deliever medicines & health products all over india</p>
            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/29.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full md:rounded-r-3xl" alt="i1" />
            </div>
          </div>
        </div>
        {{-- item starts --}}
        <div class="w-full mySlides fade rounded-3xl">
          <div id="item3" class="grid w-full h-full carousel-item fade rounded-3xl md:grid-cols-3">

            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-green-300/30 p-10 py-12 md:rounded-l-3xl">
              <p class="py-4 pt-3 font-sans text-lg font-bold text-green-800/70">TRUSTED
                CARE</p>
              <p class="py-4 text-5xl font-black">Genuine medicines</p>
              <p class="text-xl font-normal"> All medicines & health products are sourced
                from GLH's
                trusted network of verified pharmacies and medical stores</p>
            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/30.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full md:rounded-r-3xl" alt="i3" />
            </div>
          </div>
        </div>
        {{-- item starts --}}
        <div class="w-full mySlides fade rounded-3xl">
          <div id="item4" class="grid w-full h-full carousel-item fade rounded-3xl md:grid-cols-3">

            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-purple-300/30 p-10 py-12 md:rounded-l-3xl">
              <p class="py-4 pt-3 font-sans text-lg font-bold text-purple-800/70">
                COMPREHENSIVE INFORMATION</p>
              <p class="py-4 text-5xl font-black">Know your medicine</p>
              <p class="text-xl font-normal"> Exhaustive information about medicines
                written by verified medical exports</p>
            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/31.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full md:rounded-r-3xl" alt="i3" />
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- next slide --}}
    <button aria-label="slide forward" onclick="plusSlides(1) "
      class="absolute right-0 z-30 mr-10 font-bold next lg text-slate-700 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2"
      id="next">
      <svg class="dark:text-gray-900" width="15" height="20" viewBox="0 0 8 14" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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