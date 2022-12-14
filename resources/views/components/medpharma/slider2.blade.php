<div class="grid min-w-[20rem] max-w-[20rem] flex-shrink-0">
    <div>
        {{ $img }}
    </div>
    <div class="h-full w-full rounded-b-lg bg-gray-800 bg-opacity-20 p-4 dark:bg-opacity-50">
        <p class="pt-3 text-sm font-bold leading-5 text-gray-600 dark:text-slate-100 lg:leading-6">
            {{ $product }}
        </p>
    </div>
    <div class="mx-2 my-3 mt-10">
        <p class="float-left space-x-2 font-sans text-2xl font-semibold dark:text-slate-700">
            &#8377;{{ $pr }}
            @if (isset($off))
            <s class="text-xs font-bold text-gray-400">&#8377;{{ $offpr }}</s><span
                class="text-lg font-bold text-green-500">{{ $off }}</span>
            @endif
        </p>
        <button class="text-md float-right mx-1 rounded-lg bg-blue-600 px-3 py-1.5 font-bold text-teal-100">{{ $bt }}
        </button>

    </div>
</div>