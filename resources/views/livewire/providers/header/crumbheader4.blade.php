<div class="sticky top-0 z-20 text-slate-100 bg-slate-600 ">
    <x-prime.providerh2>
        <x-slot name="page">
            <a href="{{ url('/providers/hospitals') }}" class="{{ (request()->is('providers/hospitals'))
                ?'text-amber-600':''}}">Hospitals</a>
        </x-slot>

        <x-slot name="a1">
            <a href="{{ url('/providers/hospitals/qikwell') }}" class="{{ (request()->is('providers/hospitals/qikwell'))
                ?'text-amber-600':''}}"> Qikwell</a>
        </x-slot>
    </x-prime.providerh2>
    {{-- Stop trying to control. --}}
</div>