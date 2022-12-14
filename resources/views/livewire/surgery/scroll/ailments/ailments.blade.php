<div class="my-10 max-h-[300rem] w-full">
  <h1 class="flex text-xl font-extrabold text-gray-700 md:justify-start">We are experts
    in Surgical solutions for 50+
    ailments</h1>
  <div
    class="flex items-center justify-center py-8 my-6 text-center border-0 rounded-lg shadow-lg bg-white/50 shadow-stone-500 dark:bg-black/60">
    <div class="">
      <h2
        class="flex justify-center px-4 text-lg font-bold text-gray-700 pb-7 dark:text-gray-100 xl:pt-4 2xl:justify-start">
        Popular Surgeries</h2>
      <div
        class="grid grid-cols-2 gap-20 px-2 text-sm font-semibold text-gray-800 dark:text-gray-200 sm:grid-cols-3 lg:grid-cols-4">


        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="mx-auto w-14 " />
          <p>Piles</p>

        </div>

        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Hernia</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Kidney Stone</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Cataract</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Circumcision</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Lasik</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Varicose Veins</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Gall Stones</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Anal Fisturia</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Gynaeco Mastia</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Anal Fissure</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Lipoma Removal</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Sebaceous Cyst</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Ovarian cyst</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>Pilonidal Sinus</p>
        </div>
        <div onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')">
          <img src="{{ URL::asset('/25.jpg') }}" alt="" class="pb-2 mx-auto w-14" />
          <p>TURP</p>
        </div>

      </div>
    </div>

  </div>







  <div
    class="flex items-center justify-center w-full p-2 py-8 my-6 text-left border-0 rounded-lg shadow-lg mt-14 bg-white/50 shadow-stone-500 dark:bg-black/60 md:p-7">
    <div class="">
      <h2
        class="flex justify-center px-4 text-lg font-bold text-gray-700 pb-7 dark:text-slate-100 xl:justify-start xl:pt-4">
        Our Departments</h2>
      <div class="grid gap-6 text-center sm:grid-cols-2 md:grid-cols-3 md:text-left">

        <x-cityradio onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.b1')">
          <x-slot name="img">
            <img src="{{ URL::asset('/11.jpg') }}" alt="" class="w-3/4 mx-auto font-bold max-h-40 md:w-64" />
          </x-slot>
          <x-slot name="problem">
            General Surgery
          </x-slot>
          <x-slot name="ailment">6 ailments</x-slot>
        </x-cityradio>
        <x-cityradio onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.b3')">
          <x-slot name="img">
            <img src="{{ URL::asset('/35.jpg') }}" alt="" class="w-3/4 mx-auto font-bold max-h-40 md:w-64" />
          </x-slot>
          <x-slot name="problem">
            Orthopedics
          </x-slot>
          <x-slot name="ailment">6 ailments</x-slot>
        </x-cityradio>
        <x-cityradio onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.b1')">
          <x-slot name="img">
            <img src="{{ URL::asset('/13.jpg') }}" alt="" class="w-3/4 mx-auto font-bold max-h-40 md:w-64" />
          </x-slot>
          <x-slot name="problem">
            Ophthamology
          </x-slot>
          <x-slot name="ailment">6 ailments</x-slot>
        </x-cityradio>
        <x-cityradio onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.b2')">
          <x-slot name="img">
            <img src="{{ URL::asset('/40.jpg') }}" alt="" class="w-3/4 mx-auto font-bold max-h-40 md:w-64" />
          </x-slot>
          <x-slot name="problem">
            Gynaecology
          </x-slot>
          <x-slot name="ailment">6 ailments</x-slot>
        </x-cityradio>
        <x-cityradio onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.b3')">
          <x-slot name="img">
            <img src="{{ URL::asset('/9.jpg') }}" alt="" class="w-3/4 mx-auto font-bold max-h-40 md:w-64" />
          </x-slot>
          <x-slot name="problem">
            Urology
          </x-slot>
          <x-slot name="ailment">6 ailments</x-slot>
        </x-cityradio>
        <x-cityradio onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.b2')">
          <x-slot name="img">
            <img src="{{ URL::asset('/37.jpg') }}" alt="" class="w-3/4 mx-auto font-bold max-h-40 md:w-64" />
          </x-slot>
          <x-slot name="problem">
            Cosmetic
          </x-slot>
          <x-slot name="ailment">6 ailments</x-slot>
        </x-cityradio>
      </div>
    </div>

  </div>
  {{-- Because she competes with no one, no one can compete with her. --}}

</div>