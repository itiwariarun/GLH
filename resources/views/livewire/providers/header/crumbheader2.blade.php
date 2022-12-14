<div class="sticky top-0 z-20 text-black bg-black/10">
    <x-prime.providerh2>
        <x-slot name="page">
            <a href="{{ url('/providers/doctors') }}" class="{{ (request()->is('providers/doctors'))
                ?'text-amber-600':''}}">Doctor</a>
        </x-slot>
        <x-slot name="a1">
            <a href="{{ url('/providers/doctors/profile') }}" class="{{ (request()->is('providers/doctors/profile'))
                ?'text-amber-600':''}}"> GLH Profile</a>
        </x-slot>
        <x-slot name="a2">
            <a href="{{ url('/providers/doctors/health-feed') }}" class="{{ (request()->is('providers/doctors/health-feed'))
                ?'text-amber-600':''}}"> GLH Health Feed</a>
        </x-slot>
    </x-prime.providerh2>
    {{-- Stop trying to control. --}}
</div>