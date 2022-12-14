<div class="my-10 md:my-5">
  <x-video.card>
    <x-slot name="head">Common Health
      Concerns
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
  <div class="lg:px-36">

    <div class="relative flex h-full w-full items-center justify-center px-6">


      {{-- item starts --}}
      {{-- prev slide --}}
      <x-button.left id="bt1-left">
      </x-button.left>

      <div class="parent no-scrollbar  mx-auto h-72 w-full touch-pan-x overflow-x-auto overflow-y-hidden">
        <div
          class="no-scroll childd no-scrollbar rounded-xl flex h-full w-full items-center justify-start gap-6 transition duration-700 ease-out md:gap-5 lg:gap-6"
          id="con1">
          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Cough & Cold?</x-slot>
            <x-slot name="price">&#8377; 399</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>


          </x-video.commonh>
          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Period Problems?</x-slot>
            <x-slot name="price">&#8377; 449</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>

          </x-video.commonh>
          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Performance issues in bed?</x-slot>
            <x-slot name="price">&#8377; 499</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>

          </x-video.commonh>

          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Skin Problems?</x-slot>
            <x-slot name="price">&#8377; 449</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>

          </x-video.commonh>

          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Depression or anxiety?</x-slot>
            <x-slot name="price">&#8377; 499</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>

          </x-video.commonh>

          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Want to loose weight?</x-slot>
            <x-slot name="price">&#8377; 3350</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>

          </x-video.commonh>

          {{-- item starts --}}
          <x-video.commonh>
            <x-slot name="img">
              <img src="{{ URL::asset('/7.jpg') }}" alt="black chair and white table"
                class="w-full object-cover object-center" />
            </x-slot>
            <x-slot name="hd">
              Stomach issues?</x-slot>
            <x-slot name="price">&#8377; 335</x-slot>
            <a href="#">
              <x-slot name="bt">Consult
                Now</x-slot>
            </a>

          </x-video.commonh>

        </div>
      </div>
      {{-- forward slide --}}
      <x-button.right id="bt1-right">
      </x-button.right>
    </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/scroll1.js') }}" defer></script>

</div>