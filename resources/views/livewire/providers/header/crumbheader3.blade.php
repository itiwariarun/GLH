<div class="sticky top-0 z-20 text-slate-100 bg-slate-600 ">
    <x-prime.providerh2>
        <x-slot name="page">
            <a href="s{{ url('/providers/clinic') }}" class="{{ (request()->is('providers/clinics'))
                ?'text-amber-600':''}}">Clinics</a>
        </x-slot>
        <x-slot name="a1">
            <a href="{{ url('/providers/clinics/consult') }}" class="{{ (request()->is('providers/clinics/consult'))
                ?'text-amber-600':''}}"> GLH Consult</a>
        </x-slot>
        <x-slot name="a2">
            <a href="{{ url('/providers/doctors/profile') }}" class="{{ (request()->is('providers/doctors/profile'))
                ?'text-amber-600':''}}"> GLH Profile</a>
        </x-slot>
        <x-slot name="a3">
            <a href="{{ url('/providers/prime') }}" class="{{ (request()->is('providers/prime'))
                ?'text-amber-600':''}}"> GLH Prime</a>
        </x-slot>
    </x-prime.providerh2>
    {{-- Stop trying to control. --}}
</div>