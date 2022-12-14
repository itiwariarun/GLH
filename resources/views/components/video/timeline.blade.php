<li class="relative mb-6 sm:mb-0">
  <div class="flex items-center">
    <div
      class="z-10 flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-200 ring-0 ring-stone-500/80 dark:bg-slate-700 dark:ring-gray-300 sm:ring-8">
      {{ $symb }}
    </div>
    @if (isset($line))
    <div class="mx-auto hidden h-0.5 w-8/12 bg-gray-600 dark:bg-gray-700 sm:flex">
      {{ $line }}
    </div>
    @endif
  </div>
  <div class="mt-3">
    <p class="text-base text-lg font-normal text-gray-800 dark:text-gray-600">
      {{ $para }}</p>
  </div>
</li>