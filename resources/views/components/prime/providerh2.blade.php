<div class="sticky top-0 z-50 flex gap-2 py-3 font-bold max-h-96 md:grid md:grid-cols-2 md:px-20 xl:px-40 2xl:px-72 ">
    <div class="flex justify-start px-4 py-1 hover:text-amber-500">{{ $page }}
    </div>
    @if (isset($btn))
    <a href="" class="flex justify-center md:justify-end"><button
            class="px-6 py-1 mx-4 rounded-md bg-amber-600 text-slate-100 hover:bg-amber-700 ">{{$btn}}</button></a>
    @elseif (isset($a1))
    <div class="flex justify-center space-x-6 md:justify-end md:px-1">
        <div
            class="flex justify-center py-1 tracking-tighter md:justify-start sm:tracking-normal hover:text-amber-500">
            {{ $a1 }}</div>
        @if (isset($a2))
        <div class="flex justify-center py-1 tracking-tighter md:justify-start sm:tracking-normal hover:text-amber-500">
            {{ $a2 }}</div>
        @endif

        @if (isset($a3))
        <div class="flex justify-center py-1 tracking-tighter md:justify-start sm:tracking-normal hover:text-amber-500">
            {{ $a3 }}</div>
        @endif
    </div>
    @endif

</div>