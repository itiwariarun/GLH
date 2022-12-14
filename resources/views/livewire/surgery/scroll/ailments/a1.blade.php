<div class="max-h-[100rem]">
  <x-modal>

    <x-slot name="title">
      <div>
        <p
          class="-mt-4 -ml-6 max-h-20 w-1/2 border-l-0 bg-green-600 py-0.5 px-2.5 text-sm text-white/90 md:w-1/3 md:rounded-tl-lg lg:w-5/6 xl:w-2/3">
          Free First Time Consultation</p>
      </div>
      <p class="text-center font-extrabold dark:text-slate-200">
        Claim a FREE consultation for Piles with our expert Surgeon
      </p>
    </x-slot>

    <x-slot name="content">
      <select placeholder="banglore"
        onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a2')"
        onmousedown="(function(e){e.preventDefault();})(event, this)"
        class="mt-10 h-14 w-full rounded-xl border-[0.125rem] border-gray-400 px-3 md:mt-2"
        name="Bangalore" id="">
        <option value="this->value" defer>Bangalore</option>
      </select>
      <input type="text"
        class="h-14 w-full rounded-xl border-[0.125rem] border-gray-400"
        placeholder="Name*" />
      <input class="h-14 w-full rounded-xl border-[0.125rem] border-gray-400"
        type="tel" placeholder="Contact Number*" />



    </x-slot>

    <x-slot name="button">

      <Button class="h-14 w-full rounded-xl bg-blue-800 px-2 text-slate-100">Get Free
        consultation</Button>
    </x-slot>
    <x-slot name="footer">
      <p class="text-center text-xs font-semibold text-gray-600 dark:text-gray-300">By
        Submitting the form,
        you
        agree
        to glh's <span class="text-blue-500">T&C</span></p>
    </x-slot>
  </x-modal>
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
