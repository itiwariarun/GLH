<div class="max-h-[35rem] overflow-y-auto">
  <x-modal>

    <x-slot name="title">

      <p class="fixed top-0 left-0 w-[22.89rem] bg-stone-300 font-extrabold dark:bg-gray-700 dark:text-slate-200">
        <button type="button"
          class="ml-auto inline-flex items-start justify-start rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          wire:click="$emit('closeModal')"> <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <span class="pl-14"> Select Your Desired City</span>
      </p>
    </x-slot>

    <x-slot name="content">
      <form action="#" class="grid items-center justify-center gap-6 pt-10 md:pt-2">
        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Delhi" value="Delhi" name="city" type="radio" class="pr-4" />
          <label for="Delhi">Delhi</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Bangalore" value="Bangalore" name="city" type="radio" class="pr-4" />
          <label for="Bangalore">Bangalore</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Mumbai" value="Mumbai" name="city" type="radio" class="pr-4" />
          <label for="Mumbai">Mumbai</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Chandigarh" value="Chandigarh" name="city" type="radio" class="pr-4" />
          <label for="Chandigarh">Chandigarh</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Kolkata" value="Kolkata" name="city" type="radio" class="pr-4" />
          <label for="Kolkata">Kolkata</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Chennai" value="Chennai" name="city" type="radio" class="pr-4" />
          <label for="Chennai">Chennai</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Ladakh" value="Ladakh" name="city" type="radio" class="pr-4" />
          <label for="Ladakh">Ladakh</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Ahmedabad" value="Ahmedabad" name="city" type="radio" class="pr-4" />
          <label for="Ahmedabad">Ahmedabad</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Jaipur" value="Jaipur" name="city" type="radio" class="pr-4" />
          <label for="Jaipur">Jaipur</label>
        </div>

        <div class="text-extrabold flex flex-row space-x-4 text-xl dark:text-slate-100">
          <input id="Deharadun" value="Deharadun" name="city" type="radio" class="pr-4" />
          <label for="Deharadun">Deharadun</label>
        </div>

      </form>
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