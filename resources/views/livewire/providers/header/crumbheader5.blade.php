<div class="sticky top-0 z-20 text-slate-100 bg-slate-600 ">
    <x-prime.providerh2>
        <x-slot name="page">
            <a href="{{ url('/providers') }}" class="{{ (request()->is('providers'))
                ?'text-amber-600':''}}">Providers</a>
        </x-slot>
        <x-slot name="a1">
            <a href="{{ url('/providers/doctors') }}">
                <p class="{{ (request()->is('/providers/doctors'))
                ?'text-amber-600':''}}"> For Doctors</p>
            </a>
        </x-slot>
        <x-slot name="a2">
            <a href="{{ url('/providers/clinics') }}" class="{{ (request()->is('providers/clinics'))
                ?'text-amber-600':''}}"> For Clinics</a>
        </x-slot>
        <x-slot name="a3">
            <a href="{{ url('/providers/hospitals') }}" class="{{ (request()->is('providers/hospitals'))
                ?'text-amber-600':''}}"> For Hospitals</a>
        </x-slot>
    </x-prime.providerh2>
    {{-- Stop trying to control. --}}
</div>