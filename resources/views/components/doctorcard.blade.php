<div
    class="max-h-[45rem] rounded-3xl border-[.16rem] border-blue-500 bg-blue-50 py-2 dark:bg-slate-700 md:py-5 lg:px-5">

    <div class="px-5 lg:px-10">
        <div class="items-center sm:flex md:items-start">
            <div class="mx-auto my-2 md:my-auto md:mx-0">
                {{ $img }} <p class="pt-2 text-center font-bold text-blue-800 dark:text-blue-500">{{$profile}}</p>
                <p class="mx-auto mt-4 w-16 rounded-md bg-green-800 py-0.5 px-2 text-[0.8rem] text-white">
                    <i class="fa-solid fa-thumbs-up"></i> {{ $success }}
                </p>

            </div>
            <div class="px-auto md:px-8">
                <h1 class="my-1 text-xl font-bold text-blue-700 dark:text-blue-400">Dr.
                    {{$name }}<span
                        class="text-xs font-semibold tracking-widest text-black dark:text-slate-200 md:max-w-sm">{{
                        $field }}</span>
                </h1>
                <p class="text-xs tracking-widest dark:text-slate-200 md:max-w-sm">{{$years}}</p>
                <p class="text-xs tracking-widest dark:text-slate-200 md:max-w-sm">
                    {{ $approved }}</p>
                <p class="text-xs tracking-widest dark:text-slate-200 md:max-w-sm">
                    {{-- <img class="rounded-md  flex md:w-32 my-0.5 md:h-10 dark:bg-white dark:opacity-70 px-4 "
                        src="{{ URL::asset('/img/doctors/1.svg') }}" alt="brad" /> --}}{{$surgery}}</p>
                <p class="text-xs tracking-widest dark:text-slate-200 md:max-w-sm"><span class="font-extrabold">{{
                        $place
                        }}</span> <i class="fa-solid fa-circle text-[0.3rem]"></i> {{$partner}}</p>
                <p class="text-xs tracking-widest dark:text-slate-200 md:max-w-sm">
                    &#8377;{{$fees}}</p>
                <p
                    class="w-28 rounded-md border-b-2 border-black pt-6 text-center text-[0.8rem] font-bold text-slate-900 dark:border-white dark:text-slate-200">
                    {{ $stories }}</p>

            </div>
        </div>
        <div class="my-2 grid w-full justify-center space-y-4 md:my-0 md:flex md:justify-end md:space-y-0">
            <p class="px-5 font-extrabold text-green-700 dark:text-green-500 md:py-3"><i
                    class="fa-solid fa-calendar-day px-1.5"></i>{{ $Available }}</p>
            <button
                class="rounded-md border-2 border-blue-300 bg-slate-900 px-4 py-2 font-semibold text-slate-200 transition duration-75 hover:bg-indigo-600 hover:text-indigo-100 dark:border-indigo-600">
                <p class="text-sm">{{ $appoinment }}</p>
                <p class="text-[0.7rem]">{{ $book }}</p>
            </button>
            <button
                class="mx-4 rounded-md border-2 border-blue-500 bg-transparent px-4 py-2 font-bold text-blue-500 transition duration-75 hover:bg-indigo-600 hover:text-indigo-100 md:text-sm">
                {{ $consult }}
            </button>
        </div>
    </div>

</div>