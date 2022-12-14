<div>
  <div class="mt-44 max-h-[200rem] bg-stone-50 p-2 md:mt-10 md:p-10">
    <div class="xl:mx-76 md:mx-16 lg:mx-36">
      {{-- carousel start --}}
      <div
        class="w-full h-full gap-5 text-black carousel xs:space-x-40 space-x-60 rounded-3xl dark:text-slate-300 sm:space-x-20 md:gap-0">
        {{-- item starts --}}
        <div class="mySlides rounded-3xl">
          <div id="item1" class="grid w-full h-full carousel-item fade md:grid-cols-3">
            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-stone-400/50 p-6 py-10 dark:bg-stone-700">
              <p class="w-24 px-3 py-1 mb-5 font-semibold text-black bg-white rounded-md text-md">
                Launching</p>
              <p class="text-5xl font-black"> Back to Office Checkup</p>
              <p class="pt-3 text-3xl font-normal"></p>
              <p class="pt-1 text-2xl font-bold"><span class="text-3xl">&#8377;999</span>at
                Just</p>
              <p class="text-xl font-normal"> Includes Covid-19 antibody & 60+tests</p>
              <p class="pb-8 text-xl font-normal xl:pb-10">Free Home sample pickup</p>

              <button class="px-10 py-3 mx-20 font-semibold text-white bg-blue-500 rounded-lg dark:bg-blue-800">Know
                More</button>
            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/20.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full" alt="i2" />
            </div>
          </div>
        </div>
        {{-- item starts --}}
        <div class="mySlides rounded-3xl">
          <div id="item2" class="grid w-full h-full carousel-item fade rounded-3xl md:grid-cols-3">
            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-cyan-400 p-10 py-10 dark:bg-cyan-800 md:rounded-l-3xl">
              <p class="text-5xl font-black">Young Indian Health Checkup</p>
              <p class="pt-3 text-3xl font-normal">Includes 84 tests</p>
              <p class="text-3xl font-normal xl:pb-17 md:pb-0">Ideal for individuals
                aged
                15-40yrs</p>
              <div class="pt-14">
                <button class="px-8 py-3 mx-20 font-semibold text-white bg-blue-500 rounded-md dark:bg-blue-800">Know
                  More</button>
              </div>
            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/21.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full" alt="i1" />
            </div>
          </div>
        </div>
        {{-- item starts --}}
        <div class="mySlides rounded-3xl">
          <div id="item3" class="grid w-full h-full carousel-item fade rounded-3xl md:grid-cols-3">

            <div
              class="col-span-2 max-h-[34rem] min-h-[34rem] w-full space-y-2 bg-slate-400/50 p-8 py-10 dark:bg-slate-700 md:rounded-l-3xl">
              <p class="text-5xl font-black">Covid-19 RTPCR test</p>
              <p class="pt-3 text-3xl font-normal">Reports within 24 hours</p>
              <p class="text-3xl font-normal">Home sample collection</p>
              <p class="pt-1 pb-20 text-2xl font-semibold sm:pb-10 xl:pb-20"><span
                  class="text-3xl font-black">&#8377;500</span> onwards*</p>
              <button
                class="px-8 py-3 mx-20 font-semibold text-white bg-blue-500 rounded-md dark:bg-blue-800 xl:py-4">Know
                More</button>
            </div>
            <div class="flex justify-center flex-auto"> <img src="{{ URL::asset('/22.jpg') }}"
                class="max-h-[34rem] min-h-[34rem] min-w-[32rem] md:min-w-full" alt="i3" />
            </div>
          </div>
        </div>
      </div>
      {{-- carousel end --}}
      {{-- carousel button --}}
      <div class="flex justify-center w-full gap-3">
        <a href="#item1" class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</a>
        <a href="#item2" class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</a>
        <a href="#item3" class="text-4xl rounded-full dot text-slate-600 active:focus:text-slate-400">&#X2022;</a>
      </div>
      {{-- carousel button end --}}
    </div>
  </div>
  {{-- Need Help Card --}}
  <x-lab.card>
    <x-slot name="img"><img src="{{ URL::asset('/2.jpg') }}" class="float-left w-16 py-4 rounded-full h-18" alt="a" />
    </x-slot>
    <x-slot name="p1">Need help with booking your test?</x-slot>
    <x-slot name="p2">Our experts are here to help you</x-slot>
    <x-slot name="tel">+91 80XXXXXX807</x-slot>
  </x-lab.card>
  {{-- card end --}}
  <style>
    .fade {
      animation-name: fade;
      animation-duration: 1s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }
  </style>
  <script type="text/javascript" src="{{ URL::asset('js/lab.js') }}" defer></script>
</div>