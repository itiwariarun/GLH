<div class="max-h-[35rem] overflow-y-auto">
  <x-modal>

    <x-slot name="title">

      <p
        class="fixed top-0 left-0 w-[22.89rem] bg-stone-300 font-extrabold text-gray-700 dark:bg-gray-700 dark:text-slate-200">
        <button type="button"
          class="ml-auto inline-flex items-start justify-start rounded-lg bg-transparent p-1.5 text-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          wire:click="$emit('closeModal')"><i class="fa-solid fa-circle-left text-lg"></i>
        </button>
        <span class="py-2 pl-14"> Select Your Health concern</span>
      </p>
    </x-slot>

    <x-slot name="content">
      <form action="#"
        class="text-md grid items-center justify-center gap-6 pt-10 font-semibold text-slate-900 dark:text-slate-100">

        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Kidney Stone</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Kidney Stone" value="Kidney Stone" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Renal Cyst</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Renal Cyst" value="Renal Cyst" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Urethroplastry</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Urethroplastry" value="Urethroplastry" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Nephrectomy</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Nephrectomy" value="Nephrectomy" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">TURP</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="TURP" value="TURP" name="Ailment" type="radio" />
          </div>
        </div>
      </form>
    </x-slot>

  </x-modal>
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

</div>