@if (isset($location))
<button class="w-24 py-1 border-2 rounded-md px-auto dark:border-slate-500">{{ $location }}</button>
@elseif (isset($count))
<div {{ $attributes->merge(['class'=>"float-left px-2 py-2 my-2 text-white border-blue-400"])}}>
    <p class="font-bold">{{ $count }}</p>
    <p class="text-[0.6rem] text-slate-200">{{ $info }}</p>
</div>
@elseif (isset($count3))
<div class="grid space-x-1 rounded-md bg-blue-100 p-2 xl:space-x-2">
    <p class="text-center text-[0.6rem] text-gray-800">{{ $info }}</p>
    <p class="text-center  text-sm text-gray-600">{{ $count3 }}</p>
</div>
@endif