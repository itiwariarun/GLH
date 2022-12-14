<div>
  <div class="container mx-auto my-24 -mb-10 px-6">

    <section class="mb-32 text-left text-gray-800">


      <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
        <x-landing.more1>
          <x-slot name="main">Read top
            articles from
            health experts</x-slot>

          <x-slot name="sub">
            Health articles that keep you informed about good health practices and
            achieve your
            goals.
          </x-slot>

          <a>
            <x-slot name="bt">See
              all articles
            </x-slot>
          </a>
      </div>
  </div>
  </x-landing.more1>
  <x-landing.more>

    <x-slot name="img">
      <img src="{{ URL::asset('/14.jpg') }}" class="h-full w-full" />

    </x-slot>
    <x-slot name="h1">
      CORONAVIRUS</x-slot>

    <x-slot name="p1">
      12 Coronavirus Myths and Facts That You Should Be Aware Of
    </x-slot>
    <x-slot name="name">
      Dr. Diana Borgio
    </x-slot>

  </x-landing.more>
  <x-landing.more>

    <x-slot name="img">
      <img src="{{ URL::asset('/14.jpg') }}" class="h-full w-full" />

    </x-slot>
    <x-slot name="h1">
      VITAMIN AND
      SUPPLEMENTS</x-slot>

    <x-slot name="p1">
      Eating Right to Build Immunity Against Cold and Virul Infections
    </x-slot>
    <x-slot name="name">
      Dr. Diana Borgio
    </x-slot>

  </x-landing.more>
</div>

</section>

</div>
</div>
