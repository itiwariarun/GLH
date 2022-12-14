<div @click.away="open = false" class="  -ml-6 flex px-4" x-data="{ open: false }">
    <button @click="open = !open"
        class="focus:shadow-outline flex w-full px-2 items-center rounded-lg bg-transparent pb-2 bg-stone-200 text-left text-sm font-normal hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white  dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:inline md:w-auto">
        <span class="">{{$heading}}</span>
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
            class="mt-4 ml-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg> </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute left-0 mt-12 z-20 w-full origin-top-right md:w-full md:max-w-screen-sm">
        <div class="rounded-md bg-white px-2 pt-2 pb-4 shadow-lg dark:bg-gray-700">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div
                    class="row focus:shadow-outline flex items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white">
                    {{ $a1 }}
                </div>

                <div
                    class="row focus:shadow-outline flex items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white">
                    {{ $a2 }}
                </div>

                <div
                    class="row focus:shadow-outline flex items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white">
                    {{ $a3 }}
                </div>
            </div>
        </div>
    </div>
</div>