<div @click.away="open = false" class="flex" x-data="{ open: false }">
    @if (isset($type))
    <p class="font-md py-2.5 dark:text-white/70">{{ $type }}</p>
    @endif
    <button @click="open = !open" {{ $attributes->merge(['class'=>" dark:focus:text-white dark:hover:text-white
        dark:focus:bg-gray-600 dark:hover:bg-gray-600 focus:shadow-outline text-md mt-[40rem] flex w-full items-center
        rounded-lg px-4 py-1.5 font-bold hover:bg-gray-200
        hover:text-gray-900
        focus:bg-gray-200 focus:text-gray-900 focus:outline-none
        md:mt-0 md:ml-4 md:inline md:w-auto"]) }}>

        <span>{{ $filtername }}</span>
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
            class="inline w-6 h-6 pt-1 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute w-full mt-16 origin-top-right bg-white left-40 md:w-screen md:max-w-screen-sm">
        <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-gray-700">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                {{ $filter }}
            </div>
        </div>
    </div>
</div>