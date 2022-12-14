<x-landing.contact>

  <x-slot name="img">
    <img class="w-full max-w-sm" src="{{ URL::asset('/16.jpg') }}" alt="contact" />
  </x-slot>
  <x-slot name="content">
    <h3 class="text-2xl font-bold dark:text-slate-300">Download the Glh app</h3>
    <p class="mt-2 max-w-[20rem] text-sm dark:text-slate-300">Access video
      consultation with India’s
      top doctors on the Glh app. Connect with doctors online, available 24/7,
      from the comfort
      of your home.</p>
    <x-slot name="formcontent">
      <p class="block w-max py-1 dark:text-slate-300">Get the link to download the
        app</p>

      <div class="py-10">
        <div
          class="block h-12 min-w-full rounded border border-white/50 bg-transparent text-white placeholder:text-white/50 md:flex md:max-w-[18rem] md:shrink-0">
          <input type="text" class="float-left hidden h-full w-[3.2rem] border-0 text-black sm:block" value="+91" />
          <input type="tel"
            class="xs:w-[16.6rem] float-right h-full w-full border-0 text-left placeholder:text-sm sm:w-[18rem]"
            placeholder="Enter Phone Number" />
        </div>
      </div>
      <x-slot name="send">Send
        Sms</x-slot>
      <x-landing.downloadbutton>
      </x-landing.downloadbutton>

    </x-slot>
  </x-slot>
  </div>
  </div>
  </div>
  </div>
  {{-- Stop trying to control. --}}
</x-landing.contact>