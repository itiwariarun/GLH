<div class="mb-6 lg:mb-0">
  <div
    class="relative rounded-lg bg-stone-300/70 from-gray-800 to-slate-700 shadow-md dark:bg-gradient-to-l dark:shadow-gray-700">
    <div class="flex h-full px-20 md:px-0">
      <div
        class="relative mx-auto -mt-4 overflow-hidden rounded-3xl bg-cover bg-no-repeat shadow-lg dark:bg-slate-500 dark:shadow-gray-700 xl:mx-4"
        data-mdb-ripple="true" data-mdb-ripple-color="light">
        {{$img}}
      </div>
    </div>
    <div class="p-6">
      <h5 class="text-md mb-3 font-bold dark:text-slate-200 md:text-[0.8rem]">
        {{$hd}}</h5>

      <button data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block w-full rounded-full bg-transparent px-3 py-2.5 text-center text-[0.6rem] font-bold uppercase leading-tight shadow-md transition duration-150 ease-in-out hover:text-blue-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg dark:text-white dark:shadow-gray-700">
        {{ $consult }}</button>
    </div>
  </div>
</div>