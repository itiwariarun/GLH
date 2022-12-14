<div class="max-h-[35rem] overflow-y-auto">
  <x-modal>

    <x-slot name="title">

      <p
        class="fixed top-0 left-0 w-[27rem] bg-stone-300 font-extrabold text-gray-700 dark:bg-gray-700 dark:text-slate-200">
        <button type="button"
          class="ml-auto inline-flex items-start justify-start rounded-lg bg-transparent p-1.5 text-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          wire:click="$emit('closeModal')"><i class="fa-solid fa-square-xmark text-lg"></i>
        </button>
        <span class="py-1 pl-20"> Select Your Surgical Ailment</span>
      </p>
    </x-slot>

    <x-slot name="content">

      <div class="grid w-full items-start justify-start gap-6 pt-10 text-left">
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="grid w-full">
            <p class="text-sm font-extrabold text-slate-900 dark:text-slate-100">General
              Surgery</p>
            <p class="text-xs font-normal text-gray-700 dark:text-slate-200">General
              Surgery</p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c2')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="grid w-full">
            <p class="text-sm font-extrabold text-slate-900 dark:text-slate-100">Kidney
              <span class="text-xs font-extralight">related</span>
            </p>
            <p class="text-xs font-normal text-gray-700 dark:text-slate-200">Urology</p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c3')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="grid w-full">
            <p class="text-sm font-extrabold text-slate-900 dark:text-slate-100">Women
              <span class="text-xs font-extralight">specific</span>
            </p>
            <p class="text-xs font-normal text-gray-700 dark:text-slate-200">Gynaecology
            </p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c4')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="grid w-full">
            <p class="text-sm font-extrabold text-slate-900 dark:text-slate-100">Eye
              <span class="text-xs font-extralight">related</span>
            </p>
            <p class="text-xs font-normal text-gray-700 dark:text-slate-200">Opthamology
            </p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c5')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="grid w-full">
            <p class="text-sm font-extrabold text-slate-900 dark:text-slate-100">Cosmetic
              Surgery <span class="text-xs font-extralight">related</span></p>
            <p class="text-xs font-normal text-gray-700 dark:text-slate-200">Cosmetic</p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c2')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="grid w-full">
            <p class="text-sm font-extrabold text-slate-900 dark:text-slate-100">Anus
              <span class="text-xs font-extralight">related</span>
            </p>
            <p class="text-xs font-normal text-gray-700 dark:text-slate-200">Proctology
            </p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c2')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <div class="grid w-full">
            <p class="text-md font-extrabold text-slate-900 dark:text-slate-100">Show all
              surgical ailments</p>
          </div>
          <div class="flex items-center pl-32">
            <i onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c6')"
              class="fa-solid fa-chevron-right dark:text-slate-100"></i>
          </div>
        </div>
      </div>

    </x-slot>

  </x-modal>
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>