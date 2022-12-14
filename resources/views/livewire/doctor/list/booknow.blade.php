<div>
  <section
    class="body-font relative mt-5 mb-5 max-h-[30rem] w-full bg-gray-700 text-gray-600 opacity-80 dark:text-slate-300 md:-mt-5">
    <div class="absolute inset-0 opacity-80 ">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"
        src="https://www.google.com/maps/embed" style=""></iframe>
    </div>
    <div class="container flex px-5 py-4 pb-24 mx-auto">
      <div
        class="relative flex flex-col w-full p-6 my-4 bg-white rounded-lg shadow-md opacity-100 -mb-14 dark:bg-slate-900 md:ml-auto md:mt-0 md:w-1/2 lg:w-1/3">
        <h1 class="text-lg font-extrabold">Provide Current location to see Doctor
          near you</h1>
        <p class="text-sm font-normal">Your are seeing results from delhi. See
          results near you.</p>
        <div class="grid grid-cols-3 gap-4 py-6 xl:grid-cols-4">
          <x-button.mapbutton1>
            <x-slot name="location">Dwarka</x-slot>
          </x-button.mapbutton1>
          <x-button.mapbutton1>
            <x-slot name="location">Rohini</x-slot>
          </x-button.mapbutton1>
          <x-button.mapbutton1>
            <x-slot name="location">Saket</x-slot>
          </x-button.mapbutton1>
          <x-button.mapbutton1>
            <x-slot name="location">Janakpuri</x-slot>
          </x-button.mapbutton1>
          <x-button.mapbutton1>
            <x-slot name="location">Rohini</x-slot>
          </x-button.mapbutton1>
          <x-button.mapbutton1>
            <x-slot name="location">Saket</x-slot>
          </x-button.mapbutton1>
          <x-button.mapbutton1>
            <x-slot name="location">Janakpuri</x-slot>
          </x-button.mapbutton1>
        </div>
        <div class="grid w-full py-2 md:flex">

          <input type="location" placeholder="Search Location"
            class="float-left h-[2.2rem] w-full rounded-t-md px-1 placeholder:font-extrabold placeholder:text-blue-700 md:w-1/2 md:rounded-l-md md:rounded-tr-none" />
          <button
            class="float-right w-full py-2 text-sm font-extrabold text-white bg-blue-600 rounded-b-md dark:bg-blue-800 md:w-1/2 md:rounded-r-md md:rounded-bl-none">
            <i class="fa-solid fa-location-crosshairs"></i> Current Location</button>
        </div>
      </div>
    </div>
  </section>
  <div class="mx-2 my-4 flex max-h-[40rem] items-start justify-center bg-white md:mx-40 xl:mx-60">
    <div class="w-full px-5 py-10 max-w-full-xl rounded-xl bg-gradient-to-tl from-blue-900 via-blue-800 to-blue-500">
      <div class="grid gap-5 md:grid-cols-2 md:gap-20">
        <div class="flex justify-center md:justify-end">
          <img class="w-full max-w-sm" src="{{ URL::asset('/15.jpg') }}" alt="Book" />
        </div>
        <div class="flex items-center">
          <div class="mx-auto md:mx-0">
            <p class="font-bold"><span class="text-3xl text-cyan-300 dark:text-gray-800 2xl:text-5xl"><span
                  class="text-3xl 2xl:text-5xl">.</span>GLH<span class="text-3xl 2xl:text-5xl">.</span>
              </span><span class="text-3xl text-slate-300 dark:text-slate-400 2xl:text-5xl">
                Care</span>
            </p>
            <p class="px-2 pt-3 text-white hr-sect3 xs:w-72 text-md dark:text-slate-200">
              SURGERIES
            </p>
            <p class="pt-10 text-xl font-bold text-white dark:text-slate-300"> FREE
              Consultation <span class="text-sm font-normal">for your first surgical
                appointment.</span> </p>
            <button onclick="Livewire.emit('openModal', 'bookingappoint')"
              class="px-4 py-2 my-3 font-bold rounded-lg bg-slate-200 text-slate-600">Book
              Now</button>
            <hr class="w-full my-5 border-2 border-blue-400 rounded-lg">
            <x-button.mapbutton1 class="border-r-2 ">
              <x-slot name="count">20000+</x-slot>
              <x-slot name="info">PATIENTS</x-slot>
            </x-button.mapbutton1>
            <x-button.mapbutton1 class="border-r-2 ">
              <x-slot name="count">200+</x-slot>
              <x-slot name="info">SURGEONS</x-slot>
            </x-button.mapbutton1>
            <x-button.mapbutton1 class="border-r-2 ">
              <x-slot name="count">100+</x-slot>
              <x-slot name="info">HOSPITALS</x-slot>
            </x-button.mapbutton1>
            <x-button.mapbutton1>
              <x-slot name="count">25+</x-slot>
              <x-slot name="info">CITIES</x-slot>
            </x-button.mapbutton1>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Care about people's approval and you will be their prisoner. --}}
</div>