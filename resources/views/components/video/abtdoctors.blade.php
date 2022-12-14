<div class="relative">
  <!-- box-1 -->
  <div class="px-2">
    <div
      class="flex h-8 w-80 rounded-t-lg border-b-2 border-slate-300 bg-slate-400/70 pl-[90px] shadow-lg dark:bg-gray-700">
      <p class="items-center py-1 text-xs font-extrabold tracking-tight text-slate-800 dark:text-slate-200">
        {{ $name }}</p>
    </div>
  </div>
  <!-- box-2 -->
  <div
    class="h-16 w-80 flex-auto flex-col rounded-lg bg-black/10 pl-[6rem] text-slate-700 shadow-xl dark:bg-gray-700 dark:text-slate-200">
    <div>
      <p class="w-full text-xs font-medium">{{ $field }}</p>
    </div>
    <div>
      <p class="w-full text-xs font-medium">{{ $exp }}</p>
    </div>
    <div>
      <p class="w-full text-xs font-medium">{{ $record }}</p>
    </div>


  </div>
  <!-- circle -->
  <div class="absolute top-2 left-6 h-16 w-16 rounded-full border-2 border-white shadow-md">
    {{ $img }} </div>
</div>