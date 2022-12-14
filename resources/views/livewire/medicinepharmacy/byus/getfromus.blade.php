<div class="py-5">
  {{-- introducing --}}
  <div class="lg:mx-30 mx-2 max-h-[100rem] max-w-full xl:mx-60">
    <hr class="rounded-lg border-t-[0.8px] border-gray-700/20 py-5">
    <div class="grid gap-6 md:grid-cols-2">
      <x-medpharma.intro>
        <x-slot name="subh">
          introducing consultation desk</x-slot>
        <x-slot name="h">
          Don't self medicate. Talk to an expert. Consult a doctor in less than 2
          minutes.</x-slot>
        <x-slot name="img">
          <img src="{{ URL::asset('/57.jpg') }}" alt="black chair and white table"
            class="object-cover object-center w-full rounded-xl" />
        </x-slot>
        <x-slot name="p">
          Chat with a</x-slot>
        <x-slot name="subp">
          Doctor
        </x-slot>
      </x-medpharma.intro>
      <x-medpharma.intro>
        <x-slot name="subh">
          introducing fast delivery</x-slot>
        <x-slot name="h">
          Tired of waiting in a queue? Too weak to go down and buy medicines?</x-slot>
        <x-slot name="img">
          <img src="{{ URL::asset('/28.jpg') }}" alt="black chair and white table"
            class="object-cover object-center w-full rounded-xl" />
        </x-slot>
        <x-slot name="p">
          Home Delivery in</x-slot>
        <x-slot name="subp">
          24 - 48 HOURS
        </x-slot>
      </x-medpharma.intro>
    </div>
  </div>
  {{-- Success is as dangerous as failure. --}}
  {{-- end introducing --}}

  {{-- information card --}}
  <div class="w-full px-5 py-10 mx-auto my-16 bg-blue-500/30 dark:bg-blue-700/60">
    <div class="grid gap-5 md:grid-cols-2 md:gap-10 lg:gap-20">

      <div class="flex items-center justify-center">
        <div class="mx-auto md:mx-0">
          <p class="text-sm font-bold uppercase text-purple-800/70 dark:text-indigo-800/80">
            Comprehensive infrormation</p>
          <h3 class="text-4xl font-extrabold text-gray-700 dark:text-black/50">Know your
            medicine</h3>
          <p class="mt-2 max-w-[20rem] text-lg font-light text-black/70 dark:text-white/80">
            Exhaustive information about medicines written by verified medical experts</p>
        </div>
      </div>
      <div class="flex items-center justify-start">
        <img class="w-full max-w-xl max-h-80" src="{{ URL::asset('/58.jpg') }}" />
      </div>
    </div>
  </div>
  {{-- end information card --}}
</div>