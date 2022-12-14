<div>
  <div class="mt-6 flex items-center justify-center">
    <h2 class="mb-2 pb-3 text-3xl font-bold text-slate-700">Offers

  </div>

  <div class="my-10 md:my-5 lg:mx-7">

    <div class="flex h-full w-full items-center justify-center px-6 lg:-mx-1 lg:px-36">


      <div class="relative flex w-full items-center justify-center">
        <x-button.left id="bt2-left">
        </x-button.left>

        <div class="no-scrollbar parent mx-auto h-60 w-full touch-pan-x overflow-x-auto overflow-y-hidden">
          <div
            class="childd no-scrollbar rounded-xl flex h-full w-full items-center justify-start gap-6 transition duration-700 ease-out md:gap-5 lg:gap-6"
            id="con2">

            <x-video.offers class="bg-stone-700/80">

              <x-slot name="off"><span class="text-stone-800">Offers</span> </x-slot>
              <x-slot name="head">
                Download the App & get &#8377; 200 HealthCash </x-slot>
              <x-slot name="bt">
                <a href="#">Download App</a>
              </x-slot>
              <x-slot name="img">
                <img src="{{ URL::asset('/10.jpg') }}" class="h-20 w-20" />
              </x-slot>
            </x-video.offers>
            <x-video.offers class="bg-blue-700/80">

              <x-slot name="off"><span class="text-blue-800">GLH PLUS</span> </x-slot>
              <x-slot name="head">
                Free online consultations starting at &#8377; 799/month </x-slot>
              <x-slot name="bt">
                <a href="#">Get Membership</a>
              </x-slot>
              <x-slot name="img">
                <img src="{{ URL::asset('/9.jpg') }}" class="h-20 w-20" />
              </x-slot>
            </x-video.offers>
            <x-video.offers class="bg-pink-700/50">

              <x-slot name="off"><span class="text-pink-800">Offers</span></x-slot>
              <x-slot name="head">
                Consult with specialist at just &#8377; 199
              </x-slot>
              <x-slot name="bt">
                <a href="#">Consult
                  Now</a>
              </x-slot>
              <x-slot name="img">
                <img src="{{ URL::asset('/7.jpg') }}" class="h-20 w-20" />
              </x-slot>
            </x-video.offers>
          </div>
        </div>
        <x-button.right id="bt2-right">
        </x-button.right>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/scroll2.js') }}" defer></script>

  {{-- In work, do what you enjoy. --}}
</div>