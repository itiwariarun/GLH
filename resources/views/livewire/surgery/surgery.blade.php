<div>
  @extends('livewire.layout.main')
  @section('content')
  <div id="surgery" role="tabpanel" class="xs:-ml-0 -ml-0.5 w-full" aria-labelledby="surgery-tab">
    <livewire:surgery.card.card />
    <div class="flex">
      <div class="grid max-h-[1500rem] w-full text-black sm:px-10 md:px-16 lg:grid-cols-3 xl:px-48">


        {{-- form for small screens --}}
        <div class="block lg:hidden">
          <livewire:surgery.consultation.form />
        </div>
        {{-- end --}}



        <div class="max-h-[1400rem] w-full px-2 lg:col-span-2">




          <livewire:surgery.scroll.ailments.ailments />


          <hr class="absolute left-0 mx-auto flex h-2.5 w-full border-0 bg-gray-700/20" />

          <livewire:surgery.scroll.gallery />

          <hr class="absolute left-0 mx-auto flex h-2.5 w-full border-0 bg-gray-700/20" />

          <livewire:surgery.card.end-to-end />
          <hr class="absolute left-0 mx-auto flex h-2.5 w-full border-0 bg-gray-700/20" />
          <livewire:surgery.glh.knowmore />



        </div>



        {{-- form for large screens --}}
        <div class="hidden lg:block">
          <livewire:surgery.consultation.form />
        </div>
        {{-- end --}}



      </div>
    </div>

  </div>
  @endsection
</div>