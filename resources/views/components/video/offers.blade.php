<div {{ $attributes->merge(['class' => 'relative flex h-full min-w-[42rem] flex-shrink-0 columns-2 sm:w-auto']) }}>

  <div class="absolute h-full w-full bg-orange-300 bg-opacity-20 p-4">
    <div class="w-28 bg-white px-3 py-1 text-lg font-extrabold text-orange-700">
      <p>{{ $off }}</p>
    </div>
    <div class="flex items-end pt-20">
      <h3 class="text-lg font-semibold leading-5 text-white dark:text-slate-100 md:text-lg lg:leading-6">
        {{ $head }}</h3>


    </div>

    <div class="pb-4">
      <btton class="text-xs font-extrabold text-slate-800 hover:text-lg">
        {{ $bt }}</btton>

    </div>

  </div>
  <div class="flex w-full items-end justify-end">
    {{ $img }} </div>
</div>