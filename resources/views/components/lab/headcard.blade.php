<div>
    @if (isset($img))
    <div class="space-x-3 space-y-2">
        {{$img}} <div class="md:float-left">
            @if (isset($head1))
            <h2 class="font-bold dark:text-white">{{ $head1 }}</h2>
            @endif
            <p class="text-sm">{{ $para1 }}</p>
        </div>
    </div>
    @elseif (isset($icon))
    <div class="mx-4 flex max-w-[18rem] rounded-lg text-black">
        <div class="flex justify-center px-4 py-2 space-x-4">{{$icon}}
            <p class=""> {{$para2}}</p>
        </div>
    </div>
    @elseif (isset($btn))
    <div class="0 mx-2 mt-4 rounded-xl bg-white/50 px-3 py-4 dark:bg-gray-700 dark:opacity-80 md:px-7 lg:mx-28">
        <div>
            <h2 class="text-left text-lg font-bold dark:text-slate-200 sm:text-3xl">{{$head}}
            </h2>
            @if (@isset($para))
            <p class="text-md text-left font-sans font-normal dark:text-slate-300">{{$para}}<span
                    class="mx-1 text-cyan-300">{{ $btn}}</span>
            </p>
            @endif

        </div>

    </div>

    @endif

</div>