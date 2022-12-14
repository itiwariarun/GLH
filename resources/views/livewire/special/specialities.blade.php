<div>
  <div>
    <div class="container mx-auto my-24 px-6">

      <section class="mb-32 text-center text-gray-800">

        <h2 class="mb-2 pb-4 text-left text-2xl font-bold">Consult top doctors online for
          any health concern</h2>
        <p class="text-md mb-4 pb-4 text-left font-bold">Private online consultation with
          verified doctors in all
          specialists</p>
        <div class="flex justify-end"><button
            class="text-md mb-12 rounded-xl border-2 border-blue-600 from-gray-800 to-slate-700 px-4 pt-3 pb-4 text-center font-bold text-blue-600 hover:text-blue-700 dark:border-gray-700 dark:bg-gradient-to-l dark:text-slate-200">View
            all Specialities</button></div>
        <div class="grid gap-6 lg:grid-cols-6 xl:gap-x-12">
          {{-- item starts --}}
          <x-landing.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/4.jpg') }}" class="h-full w-full" />

            </x-slot>
            <x-slot name="head">
              Period doubts or
              Pregnancy
            </x-slot>
            <a href="#!">
              <x-slot name="bt">
                consult now
              </x-slot>
            </a>
          </x-landing.special>
          {{-- item starts --}}
          <x-landing.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/4.jpg') }}" class="h-full w-full" />

            </x-slot>
            <x-slot name="head">
              Acne, pimples or
              skin issues
            </x-slot>
            <a href="#!">
              <x-slot name="bt">
                consult now
              </x-slot>
            </a>
          </x-landing.special>

          {{-- item starts --}}
          <x-landing.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/4.jpg') }}" class="h-full w-full" />

            </x-slot>
            <x-slot name="head">
              Performance
              issues in bed
            </x-slot>
            <a href="#!">
              <x-slot name="bt">
                consult now
              </x-slot>
            </a>
          </x-landing.special>

          {{-- item starts --}}
          <x-landing.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/4.jpg') }}" class="h-full w-full" />

            </x-slot>
            <x-slot name="head">
              Cold,cough or
              fever
            </x-slot>
            <a href="#!">
              <x-slot name="bt">
                consult now
              </x-slot>
            </a>
          </x-landing.special>

          {{-- item starts --}}
          <x-landing.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/4.jpg') }}" class="h-full w-full" />

            </x-slot>
            <x-slot name="head">
              Child not
              feeling well
            </x-slot>
            <a href="#!">
              <x-slot name="bt">
                consult now
              </x-slot>
            </a>
          </x-landing.special>

          {{-- item starts --}}
          <x-landing.special>
            <x-slot name="img">
              <img src="{{ URL::asset('/4.jpg') }}" class="h-full w-full" />

            </x-slot>
            <x-slot name="head">
              Depression or
              anxiety
            </x-slot>
            <a href="#!">
              <x-slot name="bt">
                consult now
              </x-slot>
            </a>
          </x-landing.special>

        </div>

      </section>

    </div>
  </div>

  {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
