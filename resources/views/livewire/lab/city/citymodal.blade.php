<div>
  <div>
    <div id="city-modal" data-modal-show="true" aria-hidden="true"
      class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto h-modal top-4 md:inset-0 md:h-full">
      <div class="relative w-full h-full px-4 max-w-7xl md:h-auto">
        <!-- Modal content -->
        <div class="relative overflow-x-auto bg-white rounded-lg shadow touch-pan-x dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
            <div class="space-y-6">
              <p class="text-xl font-semibold text-gray-900 dark:text-slate-200 lg:text-2xl">
                Select a City</p>

              <span
                class="flex items-center w-full px-2 border-2 border-gray-400 max-h-10 rounded-xl from-gray-300 to-slate-200 dark:border-none dark:bg-gradient-to-r ">

                <i class="fa-solid fa-location-arrow w-[2rem] px-2.5 py-2.5 text-black/70"></i>
                <input
                  class="max-h-10 min-w-[25rem] rounded-r-xl border-2 border-gray-400 from-gray-300 to-slate-200 text-black placeholder-gray-500 dark:border-none dark:bg-gradient-to-r"
                  type='search' placeholder="location" />
              </span>
              <p class="py-2 font-semibold text-gray-900 text-md dark:text-slate-200">Top
                Cities</p>
              <div class="flex items-center justify-center space-x-14">
                <div class="">
                  <img src="{{ URL::asset('/d.png') }}" class="w-16 rounded-full h-14" alt="">
                  <p class="mx-3 my-2">Delhi</p>
                </div>
                <div class="">
                  <img src="{{ URL::asset('/m.png') }}" class="w-16 rounded-full h-14" alt="">
                  <p class="mx-1 my-2">Mumbai</p>
                </div>
                <div class="">
                  <img src="{{ URL::asset('/b.jpg') }}" class="w-16 rounded-full h-14" alt="">
                  <p class="mx-1 my-2">Banglore</p>
                </div>
                <div class="">
                  <img src="{{ URL::asset('/k.jpg') }}" class="w-16 rounded-full h-14" alt="">
                  <p class="mx-1 my-2">Kolkata</p>
                </div>

              </div>
            </div>

            <button type="button"
              class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-toggle="city-modal">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-6 px-10 space-y-6">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-slate-200">ALL CITIES
            </h3>
            <div class="grid grid-cols-4 gap-60">
              <div class="space-y-2">
                <p>Agra</p>
                <p>Amrawati</p>
                <p>Bhopal</p>
                <p>Dibrugrah</p>
                <p>Gwalior</p>
                <p>Mysore</p>
                <p>Vishakapatnam</p>
                <p>Thane</p>
              </div>
              <div class="space-y-2">
                <p>Allhahabad</p>
                <p>Amritsar</p>
                <p>Chennai</p>
                <p>Ernakulum</p>
                <p>Nagpur</p>
                <p>Shillong</p>
                <p>Shimla</p>

              </div>
              <div class="space-y-2">
                <p>Aurangabad</p>
                <p>Delhi</p>
                <p>Howrah</p>
                <p>Mohali</p>
                <p>Nashik</p>
                <p>Pune</p>
                <p>Gorakhpur</p>
              </div>
              <div class="space-y-2">
                <p>Bangalore</p>
                <p>Dhanbad</p>
                <p>Gurugram</p>
                <p>Hyderabad</p>
                <p>Mumbai</p>
                <p>Silchar</p>
                <p>Vadodra</p>
              </div>
            </div>
          </div>
          <!-- Modal footer -->

        </div>
      </div>
    </div>

  </div>

  {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>