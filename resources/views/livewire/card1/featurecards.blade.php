<div>
  <div class="container mx-auto my-24 px-6">

    <section class="mb-32 text-center text-gray-800">

      <h2 class="mb-12 pb-4 text-center text-3xl font-bold">Services By Us</h2>

      <div class="grid gap-6 lg:grid-cols-5 xl:gap-x-12">
        {{-- item1 --}}
        <x-landing.feature>

          <x-slot name="img">
            <img src="{{ URL::asset('/4.jpg') }}" class="w-full" />
          </x-slot>
      </div>
      <x-slot name="content">
        <x-slot name="heading">
          Instant Video
          Consultation</x-slot>

        <x-slot name="paragraph">
          Connect within 60secs
        </x-slot>
        <x-slot name="readmore">
          <a href="#!">Read
            more</a>
        </x-slot>
      </x-slot>
      </x-landing.feature>
      {{-- item2 --}}
      <x-landing.feature>

        <x-slot name="img">
          <img src="{{ URL::asset('/4.jpg') }}" class="w-full" />
        </x-slot>
  </div>
  <x-slot name="content">
    <x-slot name="heading">Find
      Doctors Near You
    </x-slot>

    <x-slot name="paragraph">
      Confirmed Appoinments
    </x-slot>

    <x-slot name="readmore">
      <a href="#!">Read
        more</a>
    </x-slot>
  </x-slot>
  </x-landing.feature>
  {{-- item3 --}}

  <x-landing.feature>

    <x-slot name="img">
      <img src="{{ URL::asset('/4.jpg') }}" class="w-full" />
    </x-slot>
</div>
<x-slot name="content">
  <x-slot name="heading">
    Medicenes</x-slot>

  <x-slot name="paragraph">
    Essenstials at your doorstep
  </x-slot>

  <x-slot name="readmore">
    <a href="#!">Read
      more</a>
  </x-slot>
</x-slot>
</x-landing.feature>
{{-- item4 --}}
<x-landing.feature>

  <x-slot name="img">
    <img src="{{ URL::asset('/4.jpg') }}" class="w-full" />
  </x-slot>
  </div>
  <x-slot name="content">
    <x-slot name="heading">Lab
      Tests</x-slot>

    <x-slot name="paragraph">
      Sample Pickup at your home
    </x-slot>

    <x-slot name="readmore">
      <a href="#!">Read
        more</a>
    </x-slot>
  </x-slot>
</x-landing.feature>
{{-- item5 --}}
<x-landing.feature>

  <x-slot name="img">
    <img src="{{ URL::asset('/4.jpg') }}" class="w-full" />
  </x-slot>
  </div>
  <x-slot name="content">
    <x-slot name="heading">
      Surgeries</x-slot>

    <x-slot name="paragraph">
      Safe and trusted surgery centers
    </x-slot>
    <x-slot name="readmore">
      <a href="#!">Read
        more</a>
    </x-slot>
  </x-slot>
</x-landing.feature>
</div>

</section>

</div>
</div>
