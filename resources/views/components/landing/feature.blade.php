<div class="mb-6 lg:mb-0">
  <div
    class="relative block rounded-lg bg-black/5 from-gray-800 to-slate-700 shadow-lg dark:bg-gradient-to-l dark:shadow-gray-700">
    <div class="flex max-h-[11.4rem] min-h-[11.4rem] px-20 md:px-0">
      <div
        class="relative mx-auto -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:bg-slate-500 dark:shadow-gray-700 lg:mx-4"
        data-mdb-ripple="true" data-mdb-ripple-color="light">
        {{ $img }}
        <div
          class="absolute top-0 bottom-0 left-0 right-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
          style="background-color: rgba(251, 251, 251, 0.15)"></div>
        </a>
      </div>
    </div>
    <div class="p-6">
      {{ $content }}
      <h3 class="mb-3 text-lg font-bold dark:text-slate-200 md:text-[1rem]">
        {{ $heading }}
      </h3>
      <p class="mb-4 pb-2 dark:text-slate-200 md:text-sm">
        {{ $paragraph }}
      </p>
      <div data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block rounded-full bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg dark:bg-cyan-800 dark:shadow-gray-700">
        {{ $readmore }}
      </div>
    </div>
  </div>
</div>