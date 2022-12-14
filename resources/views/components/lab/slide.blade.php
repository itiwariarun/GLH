@if (isset($h1))
<div class="mb-6 w-full lg:mb-0 min-w-[16rem]">
    <div
        class="relative rounded-lg bg-white from-gray-800 to-slate-700 shadow-md dark:bg-gradient-to-l dark:shadow-gray-700">
        <div class="flex h-full px-20 md:px-0">
            <div class="relative mx-auto -mt-4 overflow-hidden rounded-3xl bg-cover bg-no-repeat shadow-lg dark:bg-slate-500 dark:shadow-gray-700 xl:mx-4"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                @if (isset($img))
                {{ $img }}
                @endif
                {{-- for image --}}
            </div>
        </div>
        <div class="p-6">
            <h5 class="mb-1 text-xl font-bold dark:text-slate-200">
                {{ $h1 }}</h5>
            <p class="text-[0.9rem] font-thin">{{ $p1 }}</p>
            <p class="text-md py-3 font-normal">{{ $p2 }}</p>
            <p class="pt-2 text-lg font-bold dark:text-slate-200">&#8377; {{ $prc }}</p>
        </div>
        <button data-mdb-ripple="true" data-mdb-ripple-color="light"
            class="inline-block w-full rounded-full bg-transparent px-3 py-2.5 text-center text-[0.8rem] font-black uppercase leading-tight shadow-md transition duration-150 ease-in-out hover:text-blue-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg dark:text-white">
            {{ $btn }}</button>
    </div>
</div>
@elseif(isset($h2))
<div class="mb-6 min-w-[15rem] lg:mb-0">
    <div class="relative block rounded-lg bg-white dark:bg-transparent dark:shadow-gray-700">
        <div class="flex h-full px-20 md:px-0">
            <div class="relative mx-auto -mt-4 overflow-hidden rounded-3xl bg-cover bg-no-repeat shadow-lg dark:bg-slate-500 dark:shadow-gray-700 xl:mx-4"
                data-mdb-ripple="true" data-mdb-ripple-color="light">

                <a href="#!">
                    <div class="absolute top-0 bottom-0 left-0 right-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                        style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
            </div>
        </div>
        <div class="p-6">
            {{$im}}

        </div>
        <button data-mdb-ripple="true" data-mdb-ripple-color="light"
            class="text-md border-none inline-block w-full rounded-full bg-transparent px-3 py-2.5 text-center font-sans font-bold uppercase leading-tight transition duration-150 ease-in-out hover:text-blue-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg dark:text-slate-800">
            {{ $h2 }}</button>
    </div>
</div>
@elseif (isset($testtype))
<div class="grid min-w-[23rem] max-w-[30rem] flex-shrink-0">
    <div>
        {{ $img2}}
    </div>
    <div class="h-full w-full bg-gray-800 bg-opacity-20 p-4 dark:bg-opacity-50">
        <h2
            class="font-sans text-2xl font-semibold leading-4 text-gray-900 hover:text-blue-600 dark:text-slate-100 lg:leading-5">
            {{$testtype}} </h2>

        <p class="pt-3 text-sm font-normal leading-5 text-gray-600 dark:text-slate-400 lg:leading-6">
            {{$idealfor}} </p>
        <p class="text-md pt-7 font-sans font-bold">
            {{$totaltest}} </p>
    </div>
    <div class="mx-2 my-3 mt-10">
        <p class="float-left space-x-2 font-sans text-2xl font-semibold dark:text-slate-200">
            &#8377;{{ $prc }} <s class="text-xs font-bold text-gray-400">&#8377;{{ $offprc }}</s><span
                class="text-lg font-bold text-green-500">{{ $off }}</span>
        </p>
        <button class="text-md float-right mx-1 rounded-lg bg-blue-600 px-5 py-2.5 font-bold text-teal-100">{{ $btn2
            }}</button>

    </div>
</div>
@endif