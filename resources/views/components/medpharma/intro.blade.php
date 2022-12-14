<div class="grid w-full">
    <div class="py-6 space-y-2">
        <p class="text-xs font-bold uppercase text-blue-800/70 dark:text-blue-800/80">
            {{ $subh }}</p>
        <h2 class="font-sans text-xl font-light dark:font-extralight dark:text-slate-800">
            {{$h}}</h2>
    </div>
    <div
        class="relative flex max-h-[20rem] min-h-[20rem] w-full flex-shrink-0 transform rounded-xl transition duration-700 hover:scale-105 sm:w-auto">
        {{$img}}
        <div class="absolute w-full h-full p-4 px-6 pt-24 bg-gray-800 rounded-xl bg-opacity-20 dark:bg-opacity-50">
            <p class="py-3 font-sans text-3xl font-normal text-gray-900/70 dark:text-slate-200">
                {{ $p }}</p>
            <h2
                class="font-sans text-3xl font-bold leading-4 tracking-widest text-gray-900/80 dark:text-slate-100 md:text-3xl lg:leading-5">
                {{ $subp }}
            </h2>
            <button aria-label="slide forward"
                class="absolute left-40 z-50 my-12 rounded-full border-[1.5px] border-gray-900/60 px-4 py-3 font-bold text-slate-900 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 dark:border-gray-800"
                id="next">
                <svg class="font-thin text-gray-900/60 dark:text-slate-800" width="12" height="17" viewBox="0 0 8 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</div>