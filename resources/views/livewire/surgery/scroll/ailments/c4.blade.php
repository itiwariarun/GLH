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
            <option class="">Vaginal Cyst</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Vaginal Cyst" value="Vaginal Cyst" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Myomectomy</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Myomectomy" value="Myomectomy" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Vaginoplasty</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Vaginoplasty" value="Vaginoplasty" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Labiaplasty</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Labiaplasty" value="Labiaplasty" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">D & C</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="D & C" value="D & C" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Hysctrectomy</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Hysctrectomy" value="Hysctrectomy" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Tubal Litigation</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Tubal Litigation" value="Tubal Litigation" name="Ailment" type="radio" />
          </div>
        </div>
        <div class="flex w-full space-x-6">
          <img src="{{ URL::asset('/25.jpg') }}" class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
          <div class="md:flex grid w-full items-center">
            <option class="">Ovarian Cyst</option>
          </div>
          <div class="flex items-center pl-10 pr-2 md:pl-16">
            <input id="Ovarian Cyst" value="Ovarian Cyst" name="Ailment" type="radio" />
          </div>
        </div>

      </form>
    </x-slot>

  </x-modal>
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

</div>