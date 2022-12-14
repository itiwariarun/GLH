<div class="">

  <x-video.card>
    <x-slot name="head">25+ Specialities
    </x-slot>
    <x-slot name="paragraph">
      Consult With top doctor online for
      any health issue</x-slot>
    <a href="#">
      <x-slot name="bt">
        See
        all Symptoms
      </x-slot>
    </a>
  </x-video.card>
  <div class="flex max-h-[23rem] items-center  justify-center px-6 md:my-10 lg:px-40">

    <div class="relative flex h-full   w-full flex-auto items-center justify-start">
      {{-- backward slide --}}
      <x-button.left id="bt-left">
      </x-button.left>
      <div class="parent no-scrollbar mx-auto h-full w-full touch-pan-x overflow-x-auto overflow-y-hidden py-10">
        <div
          class="childd no-scrollbar rounded-xl child flex h-full w-full items-end justify-start gap-6 transition duration-700 ease-out md:gap-5 lg:gap-6"
          id="conn">
          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>
          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>

          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>

          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>

          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>

          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>

          {{-- item starts --}}
          <x-video.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" class="hidden h-full w-full sm:block" />

            </x-slot>
            <x-slot name="hd">
              Acne, pimples or
              skin issues</x-slot>

            <a href="#">
              <x-slot name="consult"> Consult Now</x-slot>
            </a>
          </x-video.special>

        </div>
      </div>
      {{-- forward slide --}}
      <x-button.right id="bt-right">
      </x-button.right>
    </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}" defer></script>

  {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>