<div class='flex items-center rounded-xl  justify-center '>
    <div class="rounded-xl md:max-h-[26rem] 2xl:max-h-[20rem] border  bg-white shadow-md w-10/12 ">
        <div
            class="flex sm:grid rounded-t-xl gap-5 xl:flex w-full items-center p-5 max-h-[10rem] bg-slate-200 dark:bg-gray-600 justify-between border-b ">
            <div class="flex items-center space-x-3">
                <div class="text-lg font-bold text-slate-700 dark:text-slate-200">{{ $name }}</div>
            </div>
            <div class="flex items-center space-x-8">
                {{$category }}
            </div>
        </div>

        <div class="mt-4 p-3 mb-6 max-h-[10rem]">
            <div class="text-sm text-neutral-600">{{ $review }}</div>

        </div>

        <div>
            <div class="flex pt-5 p-3 items-end h-[3rem] justify-end text-slate-500">
                <div class="flex space-x-4 md:space-x-8">
                    <div class="flex cursor-pointer items-center transition hover:text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                        <span>{{ $like }}</span>
                    </div>
                    <div class="flex cursor-pointer items-center transition hover:text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span>{{ $coment }}</span>
                    </div>
                </div>
            </div>
            <div class="text-xs text-right pr-3 text-neutral-800">{{ $time }}</div>
        </div>
    </div>
</div>