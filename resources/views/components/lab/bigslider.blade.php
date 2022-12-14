<div class="mb-6 min-w-[22rem] rounded-lg lg:mb-0">
    <div
        class="relative rounded-lg bg-white from-gray-800 to-slate-700 shadow-md dark:bg-gradient-to-l dark:shadow-gray-700">
        <div class="flex h-full px-20 md:px-0">
        </div>
        <div class="p-6">
            <div class="pt-3 pb-6">{{ $img}}
                <h1 class="float-left mb-1 px-2 text-xl font-bold dark:text-slate-200">
                    {{ $h1 }}</h1>
            </div>
            <div class="pt-10 pb-4">
                <div class="py-2 hover:rounded-lg hover:bg-stone-200 hover:p-3 hover:dark:bg-stone-700">
                    <h3 class="font-sans text-[0.9rem] font-bold">{{ $h2 }}</h3>
                    <p class="py-2 text-sm font-thin">{{$p1}}</p>
                </div>
                <div class="py-2 hover:rounded-lg hover:bg-stone-200 hover:p-3 hover:dark:bg-stone-700">
                    <h3 class="font-sans text-[0.9rem] font-bold">{{ $h3 }}</h3>
                    <p class="py-2 text-sm font-thin">{{$p2}}</p>
                </div>
                <div class="py-2 hover:rounded-lg hover:bg-stone-200 hover:p-3 hover:dark:bg-stone-700">
                    <h3 class="font-sans text-[0.9rem] font-bold">{{ $h4 }}</h3>
                    <p class="py-2 text-sm font-thin"> {{$p3}}</p>
                </div>
                <div class="py-2 hover:rounded-lg hover:bg-stone-200 hover:p-3 hover:dark:bg-stone-700">
                    <h3 class="font-sans text-[0.9rem] font-bold">{{ $h5 }}
                    </h3>
                    <p class="py-2 text-sm font-thin">{{$p4}}</p>
                </div>
                <div class="py-2 hover:rounded-lg hover:bg-stone-200 hover:p-3 hover:dark:bg-stone-700">
                    <h3 class="font-sans text-[0.9rem] font-bold">{{ $h6 }}
                    </h3>
                    <p class="py-2 text-sm font-thin">{{$p5}}</p>
                </div>
            </div>
            <div><button data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="inline-block max-w-full rounded-md bg-cyan-700 px-4 py-2.5 text-center text-[0.8rem] font-black uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out">
                    {{$btn}}</button></div>
        </div>
    </div>
</div>