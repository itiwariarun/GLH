<div class="z-60 top-10 my-2 mt-16 grid max-h-[50rem] md:px-10 lg:sticky">
  <div
    class="-mx-[.08rem] my-6 grid max-h-[34rem] w-full bg-white/80 pb-3 font-bold shadow-lg shadow-stone-600 dark:bg-stone-800/95 md:rounded-xl">
    <div>
      <p
        class="max-h-20 w-1/2 border-l-0 bg-green-600 py-0.5 px-2.5 text-sm text-white/90 md:w-1/3 md:rounded-tl-xl lg:w-5/6 xl:w-2/3">
        Free First Time Consultation</p>
    </div>
    <div class="space-y-5 px-10 text-center lg:px-2 xl:px-10">
      <p class="mt-2 w-full text-lg text-gray-700 dark:text-gray-100">Book Your
        Consultation Today</p>
      <select placeholder="banglore"
        onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a2')"
        onmousedown="(function(e){e.preventDefault();})(event, this)"
        class="h-14 w-full rounded-xl border-[0.125rem] border-gray-400 px-3"
        name="Bangalore" id="">
        <option value="this->value" defer>Bangalore</option>
      </select>
      <select placeholder="select ailment*"
        onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.c1')"
        onmousedown="(function(e){e.preventDefault();})(event, this)"
        class="h-14 w-full rounded-xl border-[0.125rem] border-gray-400 px-3 text-slate-700"
        name="Bangalore" id="">
        <option value="this->value" class="">Select Ailment*
        </option>
      </select>
      <input type="text"
        class="h-14 w-full rounded-xl border-[0.125rem] border-gray-400"
        placeholder="Name*" />
      <input class="h-14 w-full rounded-xl border-[0.125rem] border-gray-400"
        type="tel" placeholder="Contact Number*" />
      <Button class="h-14 w-full rounded-xl bg-blue-800 text-slate-100">Get Free
        consultation</Button>
      <p class="text-xs font-semibold text-gray-600 dark:text-gray-300">By Submitting the
        form, you
        agree
        to glh's <span class="text-blue-500">T&C</span></p>
    </div>
  </div>
  <div class="px-10">
    <p class="hr-sect2 flex justify-center py-8 font-bold md:-mt-8">OR</p>
    <div
      class="max-h-18 flex w-full items-center justify-center rounded-xl border-[0.125rem] border-gray-700 p-3">
      <p class="">Reach out to us on
      <p class="font-lighter px-2 text-2xl">|</p><span class="text-blue-800"><i
          class="fa-solid fa-phone"></i> 08046555548</span></p>
    </div>
  </div>

</div>
