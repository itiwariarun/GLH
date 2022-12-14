<div class="max-h-[100rem]">
  <x-modal>
    <x-slot name="title" class="space-y-10">
      <p class="py-2 text-center text-4xl font-normal text-cyan-500 xl:pt-0"
        style="font-family: 'Allerta Stencil', sans-serif;">GLH Care</p>
      <p class="text-xl font-black text-white">Get a free appointment with the best
        surgeons for your health needs
      </p>

    </x-slot>

    <x-slot name="content">
      <div class="grid items-center justify-center gap-6 md:grid-cols-2 xl:gap-0 xl:gap-x-8">
        <div class="mx-3 grid flex-auto space-y-5 rounded-md p-7 shadow-lg shadow-stone-600 md:mx-8 md:px-3 lg:px-7">
          <input type="text" class="rounded-lg" placeholder="Tell Us About your illness/disease/ailment*"
            wire:model="illness" />
          <input type="text" class="rounded-lg" placeholder="Name*" wire:model="name" />
          <input type="text" class="rounded-lg" placeholder="Contact Number*" wire:model="number" />
          <input type="location" class="rounded-lg border-[0.115rem] border-gray-500 py-1.5 px-3" wire:model="city"
            placeholder="Select Your City" />
          <button
            class="rounded-lg border-2 border-stone-800 bg-stone-700 px-6 py-2 text-white dark:border-gray-800 dark:bg-gray-800"
            wire:click="someComponentMethod">Book
            Appoinment</button>{{-- wire:click='$emit("openModal",
          "bookingconfirmed", @json(["name" => "$name"])) --}}

        </div>
        <div class="mx-3 grid space-y-4 rounded-md p-4 shadow-sm shadow-stone-400">

          <p class="text-md font-black dark:text-white">Why Choose Us?</p>
          <p class="grid flex-auto text-[0.9rem] font-semibold text-gray-700 dark:text-slate-100 lg:flex">
            <i
              class="fa-solid fa-user-clock circle mx-2 w-12 rounded-full bg-blue-100 py-4 text-center text-blue-700"></i>
            Expert Surgeons (10+ yrs exp).
          </p>
          <p class="grid flex-auto text-[0.9rem] font-semibold text-gray-700 dark:text-slate-100 lg:flex">
            <i
              class="fa-solid fa-handshake circle mx-2 w-12 rounded-full bg-blue-100 py-4 text-center text-blue-700"></i>Dedicated
            care assistants.
          </p>
          <p class="grid flex-auto text-[0.9rem] font-semibold text-gray-700 dark:text-slate-100 lg:flex">
            <i
              class="fa-solid fa-indian-rupee-sign circle mx-2 w-12 rounded-full bg-blue-100 py-4 text-center text-blue-700"></i>Insurance
            assistance & EMI available.
          </p>
          <div class="grid flex-auto items-center justify-center gap-3 font-extrabold lg:flex">
            <x-button.mapbutton1>
              <x-slot name="info">PATIENTS</x-slot>
              <x-slot name="count3">200000+</x-slot>
            </x-button.mapbutton1>
            <x-button.mapbutton1>
              <x-slot name="info">SURGEONS</x-slot>
              <x-slot name="count3">20+</x-slot>
            </x-button.mapbutton1>
            <x-button.mapbutton1>
              <x-slot name="info">HOSPITALS</x-slot>
              <x-slot name="count3">50+</x-slot>
            </x-button.mapbutton1>
            <x-button.mapbutton1>
              <x-slot name="info">CITIES</x-slot>
              <x-slot name="count3">10+</x-slot>
            </x-button.mapbutton1>

          </div>
        </div>
      </div>
    </x-slot>

    <x-slot name="buttons">
      <button
        class="rounded-lg border-2 border-stone-800 bg-stone-800 px-6 py-2 text-white dark:border-gray-800 dark:bg-gray-900">Reset</button>
      <button class="rounded-lg border-2 border-stone-700 bg-transparent px-4 py-2 dark:border-gray-800 dark:text-white"
        wire:click="$emit('closeModal')">Cancel</button>

    </x-slot>
  </x-modal>
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>