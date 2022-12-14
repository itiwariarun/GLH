<div class="sticky top-0 z-20  text-black bg-black/10">
    <x-prime.providerh2>
        <x-slot name="page">
            <a href="{{ url('/providers/prime') }}" class="{{ (request()->is('providers/prime'))
                ?'text-amber-600':''}}">GLH Prime</a>
        </x-slot>
        <x-slot name="btn">
            Get Free Demo
        </x-slot>
    </x-prime.providerh2>
    {{-- Stop trying to control. --}}
</div>