<div>
  {{-- sroll card drawer with tabs --}}
  <x-lab.headcard>
    <x-slot name="head">
      Popular
      Health Packages
    </x-slot>
  </x-lab.headcard>
  <div class="pb-8 pt-12 mx-2 md:mx-40">
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
        role="tablist">
        <li class="mr-2" role="presentation">
          <button
            class="inline-block p-4 font-bold border-b-2 rounded-t-lg text-md text-sans bg-white/50 text-slate-800 dark:bg-gray-800 dark:text-slate-200"
            id="featured-tab" data-tabs-target="#featured" type="button" role="tab" aria-controls="featured"
            aria-selected="false">Featured CheckUps</button>
        </li>
        <li class="mr-2" role="presentation">
          <button
            class="inline-block p-4 font-bold border-b-2 border-transparent rounded-t-lg text-md text-sans bg-white/50 text-slate-800 hover:border-gray-300 hover:text-gray-600 dark:bg-gray-800 dark:text-slate-200 dark:hover:text-gray-300"
            id="mens-tab" data-tabs-target="#mens" type="button" role="tab" aria-controls="mens"
            aria-selected="false">Men's Health</button>
        </li>
        <li class="mr-2" role="presentation">
          <button
            class="inline-block p-4 font-bold border-b-2 border-transparent rounded-t-lg text-md text-sans bg-white/50 text-slate-800 hover:border-gray-300 hover:text-gray-600 dark:bg-gray-800 dark:text-slate-200 dark:hover:text-gray-300"
            id="womens-tab" data-tabs-target="#womens" type="button" role="tab" aria-controls="womens"
            aria-selected="false">Women's Health</button>
        </li>
      </ul>
    </div>
    <div id="myTabContent" class="">
      <div class="hidden max-h-[35rem] rounded-2xl bg-gray-50 p-4 dark:bg-gray-800" id="featured" role="tabpanel"
        aria-labelledby="featured-tab">
        <livewire:lab.packages.featured />
      </div>
      <div class="hidden max-h-[35rem] rounded-2xl bg-gray-50 p-4 dark:bg-gray-800" id="mens" role="tabpanel"
        aria-labelledby="mens-tab">
        <livewire:lab.packages.mens />

      </div>
      <div class="hidden max-h-[35rem] rounded-2xl bg-gray-50 p-4 dark:bg-gray-800" id="womens" role="tabpanel"
        aria-labelledby="womens-tab">
        <livewire:lab.packages.womens />

      </div>
    </div>

    {{-- end sroll card drawer with tabs --}}
    {{-- js for tabs-scroll --}}
    <script type="text/javascript" src="{{ URL::asset('js/healthpackages.js') }}" defer>
    </script>


    {{-- ended js for tabs-scroll --}}

    {{-- The whole world belongs to you. --}}
  </div>
  {{-- partner labs --}}
  <div>
    <div class="my-7 flex max-h-[48rem] items-start justify-start bg-white py-10 dark:bg-transparent md:mx-6 lg:mx-36">
      <div
        class="w-full h-full py-8 border-gray-600 shadow-y-lg px-auto max-w-full-lg rounded-xl border-y-8 shadow-gray-500">
        <div
          class="grid grid-cols-7 px-5 py-6 text-gray-600 gap-y-2 bg-stone-300 from-gray-900 to-slate-800 dark:bg-gradient-to-l dark:text-slate-400 md:px-36">
          <div class="float-left col-span-6 space-y-7">
            <p class="font-sans text-2xl font-bold">Our Partnered Labs</p>
            <p class="font-sans text-lg font-bold">KMR-GLH LABS</p>
            <p class="pt-5 font-sans text-lg font-normal">our tests will be conducted in
              one of our partner labs to ensure highest accuracy of your reports.
            </p>
          </div>
          <p class="flex items-center justify-end text-4xl font-normal logo text-cyan-900 dark:text-cyan-500">
            KMR-GLH
          </p>
        </div>
      </div>
    </div>
    {{-- Because she competes with no one, no one can compete with her. --}}
  </div>
  {{-- end partner labs --}}
</div>