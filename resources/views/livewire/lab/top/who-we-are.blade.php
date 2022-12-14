<div>
  <div class="px-2 pb-10 bg-black/5 dark:bg-gray-800/70 md:px-36 xl:px-52">
    {{-- why book with us --}}
    <div class="my-5 max-h-[50rem] w-full rounded-lg px-10 py-6">
      <h1 class="py-5 pb-10 text-2xl font-black text-center dark:text-white">Why Book With
        Us?</h1>
      <div class="grid gap-6 md:grid-cols-2">
        <x-lab.headcard>
          <x-slot name="img">
            <img src="{{ URL::asset('/26.jpg') }}" class="w-12 h-12 mx-auto md:float-left md:mx-0" alt="" />
          </x-slot>
          <x-slot name="head1">Home Sample collection For Free</x-slot>
          <x-slot name="para1">A certified professional will your sample from your
            preferred
            loaction</x-slot>
        </x-lab.headcard>
        <x-lab.headcard>
          <x-slot name="img">
            <img src="{{ URL::asset('/26.jpg') }}" class="w-12 h-12 mx-auto md:float-left md:mx-0" alt="" />
          </x-slot>
          <x-slot name="head1">Home Sample collection For Free</x-slot>
          <x-slot name="para1">A certified professional will your sample from your
            preferred
            loaction</x-slot>
        </x-lab.headcard>
        <x-lab.headcard>
          <x-slot name="img">
            <img src="{{ URL::asset('/26.jpg') }}" class="w-12 h-12 mx-auto md:float-left md:mx-0" alt="" />
          </x-slot>
          <x-slot name="head1">Home Sample collection For Free</x-slot>
          <x-slot name="para1">A certified professional will your sample from your
            preferred
            loaction</x-slot>
        </x-lab.headcard>
      </div>
    </div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

  </div>
  {{-- how it works --}}
  <div class="max-h-[60rem] max-w-full bg-white py-5 px-5 pb-16 dark:bg-transparent md:py-10 md:px-16 lg:px-44">
    <h1 class="py-12 font-sans text-3xl font-bold text-center text-slate-800">
      How it works?</h1>
    <div class="grid items-center justify-center gap-6 text-black md:flex lg:gap-0">
      <x-lab.headcard>
        <x-slot name="icon">
          <i class="fa-solid fa-flask my-1.5 h-14 w-16 rounded-full bg-blue-200 p-2.5 text-3xl text-gray-700"></i>
        </x-slot>
        <x-slot name="para2">Search for tests and packages and seamlessly book a home
          sample collection.</x-slot>
      </x-lab.headcard>
      <hr class="flex-1 hidden border-black md:block">
      <x-lab.headcard>
        <x-slot name="icon">
          <i class="fa-solid fa-user-tie my-1.5 h-14 w-16 rounded-full bg-blue-200 p-2.5 text-3xl text-gray-700"></i>
        </x-slot>
        <x-slot name="para2">We will send a certified professional to your place to assist
          you with the sample collection</x-slot>
      </x-lab.headcard>
      <hr class="flex-1 hidden border-black md:block">
      <x-lab.headcard>
        <x-slot name="icon">
          <i class="fa-solid fa-file my-1.5 h-14 w-16 rounded-full bg-blue-200 p-2.5 text-3xl text-gray-700"></i>
        </x-slot>
        <x-slot name="para2">We will send a certified professional to your place to assist
          you with the sample collection</x-slot>
      </x-lab.headcard>

    </div>
  </div>
  {{-- end how it works --}}
  {{-- we do great --}}
  <div class="max-h-[60rem] max-w-full bg-black/5 py-10 px-5 pb-16 dark:bg-gray-800/70 md:px-16">
    <h1 class="py-12 font-serif text-3xl font-bold tracking-widest text-center text-slate-800 dark:text-slate-200">
      We Do Great 😄</h1>
    <div
      class="grid items-center justify-center gap-6 font-sans text-xl font-bold text-black dark:text-slate-300 md:flex lg:gap-0">
      <div class="mx-4 min-h-full max-w-[18rem] space-y-3 rounded-lg text-center">
        <i class="fa-solid fa-flask my-1.5 h-16 w-16 rounded-full bg-blue-200 p-2.5 text-3xl text-gray-700"></i>
        <p class="">15 Million users every month</p>
      </div>
      <div class="mx-4 min-h-full max-w-[18rem] space-y-3 rounded-lg text-center md:mx-10 xl:mx-60">
        <i class="fa-solid fa-user-tie my-1.5 h-14 w-16 rounded-full bg-blue-200 p-2.5 text-3xl text-gray-700"></i>
        <p class="">Trusted by 2,00,00,000 healthcare professional</p>
      </div>
      <div class="mx-4 min-h-full max-w-[18rem] space-y-3 rounded-lg text-center">
        <div><i class="fa-solid fa-file my-1.5 h-14 w-16 rounded-full bg-blue-200 p-2.5 text-3xl text-gray-700"></i>
        </div>
        <p class="">We serve in 9 cities</p>
      </div>

    </div>
  </div>
  {{-- end great --}}
</div>