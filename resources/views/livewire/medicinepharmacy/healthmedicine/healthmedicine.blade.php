<div>
  <div class="">
    <x-medpharma.h>
      <x-slot name="h">Browse medicines & health products
      </x-slot>
      <x-slot name="sh">Health Condition</x-slot>
    </x-medpharma.h>
    {{-- -health condition --}}
    <div class="flex h-full w-full items-center justify-center px-2 lg:px-20 xl:px-56">
      {{-- prev arrow --}}

      <div class="relative flex w-full items-center justify-center">
        <x-button.left id="bt-left">
        </x-button.left>
        <div class="no-scrollbar parent mx-auto h-72 w-full touch-pan-x overflow-x-auto overflow-y-hidden px-4">
          <div
            class="no-scrollbar childd rounded-xl flex h-full w-full items-center justify-start gap-6 transition duration-700 ease-out md:gap-5 lg:gap-6"
            id="conn">
            {{-- item starts --}}
            <x-medpharma.slider>
              <x-slot name="img"><img src="{{ URL::asset('/32.jpg') }}" alt=""
                  class="w-full rounded-xl object-cover object-center" /></x-slot>
              <x-slot name="h">
                diabetes
              </x-slot>
              <x-slot name="p">
                care</x-slot>
            </x-medpharma.slider>
            {{-- item starts --}}
            <x-medpharma.slider>
              <x-slot name="img"><img src="{{ URL::asset('/33.jpg') }}" alt=""
                  class="w-full rounded-xl object-cover object-center" /></x-slot>
              <x-slot name="h">
                cough
              </x-slot>
              <x-slot name="p">
                & cold</x-slot>
            </x-medpharma.slider>

            {{-- item starts --}}
            <x-medpharma.slider>
              <x-slot name="img"><img src="{{ URL::asset('/34.jpg') }}" alt=""
                  class="w-full rounded-xl object-cover object-center" /></x-slot>
              <x-slot name="h">
                heart
              </x-slot>
              <x-slot name="p">
                health</x-slot>
            </x-medpharma.slider>

            {{-- item starts --}}
            <x-medpharma.slider>
              <x-slot name="img"><img src="{{ URL::asset('/35.jpg') }}" alt=""
                  class="w-full rounded-xl object-cover object-center" /></x-slot>
              <x-slot name="h">
                pain
              </x-slot>
              <x-slot name="p">
                relief</x-slot>
            </x-medpharma.slider>
            {{-- item starts --}}
            <x-medpharma.slider>
              <x-slot name="img"><img src="{{ URL::asset('/36.jpg') }}" alt=""
                  class="w-full rounded-xl object-cover object-center" /></x-slot>
              <x-slot name="h">
                weight
              </x-slot>
              <x-slot name="p">
                management</x-slot>
            </x-medpharma.slider>

            {{-- item starts --}}
            <x-medpharma.slider>
              <x-slot name="img"><img src="{{ URL::asset('/37.jpg') }}" alt=""
                  class="w-full rounded-xl object-cover object-center" /></x-slot>
              <x-slot name="h">
                skin
              </x-slot>
              <x-slot name="p">
                care</x-slot>
            </x-medpharma.slider>
          </div>
        </div>
        <x-button.right id="bt-right">
        </x-button.right>
      </div>
      {{-- next arrow --}}

    </div>

    <script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}" defer></script>

  </div>
  {{-- -end health condition --}}












  {{-- categories --}}
  <x-medpharma.h>
    <x-slot name="sh">Categories</x-slot>
  </x-medpharma.h>
  <div class="relative flex h-full w-full items-center justify-center px-2 lg:px-20 xl:px-56">
    {{-- prevarrow --}}

    <div class="relative flex w-full items-center justify-center">
      <x-button.left id="bt1-left">
      </x-button.left>
      <div class="no-scrollbar parent mx-auto h-72 w-full touch-pan-x overflow-x-auto overflow-y-hidden px-4">
        <div
          class="no-scrollbar childd rounded-xl flex h-full w-full items-center justify-start gap-6 transition duration-700 ease-out md:gap-5 lg:gap-6"
          id="con1">
          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/38.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              baby
            </x-slot>
            <x-slot name="p">
              care</x-slot>
          </x-medpharma.slider>

          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/39.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              fitness &
            </x-slot>
            <x-slot name="p">
              wellness</x-slot>
          </x-medpharma.slider>

          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/40.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              family
            </x-slot>
            <x-slot name="p">
              care</x-slot>
          </x-medpharma.slider>

          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/41.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              alternate
            </x-slot>
            <x-slot name="p">
              medicine</x-slot>
          </x-medpharma.slider>

          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/42.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              women
            </x-slot>
            <x-slot name="p">
              care</x-slot>
          </x-medpharma.slider>

          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/43.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              health
            </x-slot>
            <x-slot name="p">
              conditions</x-slot>
          </x-medpharma.slider>
          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/44.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              personal
            </x-slot>
            <x-slot name="p">
              care</x-slot>
          </x-medpharma.slider>
          {{-- item starts --}}
          <x-medpharma.slider>
            <x-slot name="img"><img src="{{ URL::asset('/45.jpg') }}" alt=""
                class="w-full rounded-xl object-cover object-center" /></x-slot>
            <x-slot name="h">
              device &
            </x-slot>
            <x-slot name="p">
              instruments</x-slot>
          </x-medpharma.slider>
        </div>
      </div>
      <x-button.right id="bt1-right">
      </x-button.right>
    </div>
    {{-- next arrow --}}

  </div>

  <script type="text/javascript" src="{{ URL::asset('js/scroll1.js') }}" defer></script>

</div>
{{-- endcategories --}}
{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}