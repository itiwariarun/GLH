<div class="-my-6 grid h-full max-h-[50rem] w-full items-center justify-center px-6 md:flex lg:px-12 2xl:px-40">

  <div class="rounded-xl p-4 dark:bg-gray-700 dark:text-slate-300 md:mx-5 md:px-4 md:py-4 xl:px-8">
    <h2 class="mb-2 pb-3 text-left text-lg font-bold sm:text-3xl">Book an appointment for
      an in-clinic consultation
    </h2>
    <p class="md:text-md mb-2 pb-2 text-left text-xs font-bold sm:text-[1rem]">Find
      experienced doctors across all
      specialties</p>
  </div>
  {{-- item starts --}}
  <div class="relative flex w-full items-center justify-center">
    {{-- prev arrow --}}
    <x-button.left id="bt-left">
    </x-button.left>

    <div class="parent no-scrollbar mx-auto h-72 w-full touch-pan-x overflow-y-hidden overflow-x-scroll">
      <div
        class="childd no-scrollbar flex h-full w-full items-center justify-start gap-6 transition duration-700 ease-out md:gap-5 lg:gap-6"
        id="conn">
        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Dentist
          </x-slot>
          <x-slot name="subh">
            Teething troubles? schedule a dental checkup.
          </x-slot>
        </x-landing.scroll>
        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Gynecologist
          </x-slot>
          <x-slot name="subh">
            Explore for women's health.pregnancy,etc.
          </x-slot>
        </x-landing.scroll>

        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Dietitian
          </x-slot>
          <x-slot name="subh">
            Get guidance on eating right and weight management.
          </x-slot>
        </x-landing.scroll>

        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Physiotherapist
          </x-slot>
          <x-slot name="subh">
            Pulled a muscle? Get it treated.
          </x-slot>
        </x-landing.scroll>
        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            General
            surgeon
          </x-slot>
          <x-slot name="subh">
            Need to get operated?Find the right surgeon. </x-slot>
        </x-landing.scroll>

        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Orthopedist
          </x-slot>
          <x-slot name="subh">
            For bone and joints issues, spinal injuries and more. </x-slot>
        </x-landing.scroll>

        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            General
            physician
          </x-slot>
          <x-slot name="subh">
            Find the right family doctor in your neighborhood. </x-slot>
        </x-landing.scroll>

        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Pediatrician
          </x-slot>
          <x-slot name="subh">
            specialist and doctors for infants and child </x-slot>
        </x-landing.scroll>
        {{-- item starts --}}
        <x-landing.scroll>
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-full object-cover object-center" />
          </x-slot>
          <x-slot name="h1">
            Gasteroenterologist
          </x-slot>
          <x-slot name="subh">
            Explore for issues related to digestive system. </x-slot>
        </x-landing.scroll>
      </div>
    </div>
    {{-- slide forward --}}
    <x-button.right id="bt-right">
    </x-button.right>
  </div>

  <script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}" defer></script>
</div>