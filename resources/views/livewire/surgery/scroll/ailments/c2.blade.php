<div class="max-h-[35rem] overflow-y-auto">
  <x-modal>

    <x-slot name="title">

      <p
        class="fixed top-0 left-0 w-[22.89rem] bg-stone-300 font-extrabold text-gray-700 dark:bg-gray-700 dark:text-slate-200">
        <button type="button"
          class="ml-auto inline-flex items-start justify-start rounded-lg bg-transparent p-1.5 text-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          wire:click="$emit('closeModal')"><i class="text-lg fa-solid fa-circle-left"></i>
        </button>
        <span class="py-2 pl-14"> Select Your Health concern</span>
      </p>
    </x-slot>

    <x-slot name="content">
      <form action="#"
        class="grid items-center justify-center gap-6 pt-10 font-semibold text-mf text-slate-900 dark:text-slate-100">

        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Gall Stones</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Gall Stones" value="Gall Stones" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Hernia Treatment</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Hernia Treatment" value="Hernia Treatment" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Lipoma Removal</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Lipoma Removal" value="Lipoma Removal" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Circumcision</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Circumcision" value="Circumcision" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Varicose Veins</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Varicose Veins" value="Varicose Veins" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Sebaceous Cyst</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Sebaceous Cyst" value="Sebaceous Cyst" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Varicocele</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Varicocele" value="Varicocele" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="mx-auto max-w-12 min-w-12 max-h-12" alt="" />
          <div class="grid items-center w-full ">
            <option class="">Hydrocele</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Hydrocele" value="Hydrocele" name="Ailment" type="radio" />
          </div>
        </div>
      </form>
    </x-slot>

  </x-modal>
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

</div>