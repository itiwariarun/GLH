<div>
    <div {{$attributes->merge(['class'=>'w-full grid md:grid-cols-2 mb-6 md:mb-0 pb-10 py-10 md:py-20
        max-h-[80rem]'])}}>
        <div class="">{{$img}}</div>
        <div class="flex items-start justify-start pt-10">
            <div class="grid pl-5 pr-10 space-y-4 lg:pl-16 lg:pr-32 text-slate-800 2xl:pr-60">
                {{$h1}} {{$h2}}
                <p class="grid pb-10 text-md">
                    <span><i class="fa-solid fa-check text-amber-600"></i> {{$t1}}</span>
                    <span><i class="fa-solid fa-check text-amber-600"></i> {{$t2}}</span>
                    <span><i class="fa-solid fa-check text-amber-600"></i> {{$t3}}</span>

                </p>
                @if (isset($btn))
                <button
                    class="w-1/3 px-6 py-3 my-3 font-bold rounded-md text-slate-100 bg-amber-600 hover:bg-amber-700 ">{{$btn}}</button>
                @endif

            </div>

        </div>


    </div>
    {{-- Be like water. --}}
</div>