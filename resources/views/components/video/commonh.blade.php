<div class="relative flex max-w-[20rem] flex-shrink-0 sm:w-auto">
  {{$img}}
  <div class="absolute h-full w-full bg-gray-800 bg-opacity-20 p-4 dark:bg-opacity-50">
    <div class="flex items-end pt-24">
      <h3 class="text-sm font-semibold leading-5 text-gray-900 dark:text-slate-100 md:text-lg">
        {{ $hd }}</h3>


    </div>
    <div class="pb-4">
      <p class="dark:text-white">&#8377; {{ $price }}</p>
      <a href="#" class="text-xs font-extrabold text-blue-700 hover:text-lg">{{$bt}}</a>
    </div>
  </div>
</div>