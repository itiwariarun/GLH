<div class="xl:px-22 px-2 md:px-8 lg:px-20">
  <p class="-mb-3 flex w-full items-center justify-center px-2 text-3xl font-extrabold text-black/90">
    Our users say
    about
    their
    online
    consultation experience</p>
  <div class="grid gap-y-14 py-12 md:grid-cols-2 xl:grid-cols-3">
    @foreach ($users as $user)
    <x-video.reviewspagination>
      <x-slot name="name">
        <p>{{ $user->name }}</p>
      </x-slot>
      <x-slot name="category">
        <button
          class="rounded-2xl border bg-white px-3 py-1 text-xs font-semibold text-slate-600 dark:bg-neutral-600 dark:text-slate-200">Category</button>
      </x-slot>

      <x-slot name="review">
        <p>{{ $user->content }}</p>
      </x-slot>


      <x-slot name="like">

        <p>125</p>
      </x-slot>
      <x-slot name="coment">

        <p>4</p>
      </x-slot>
      <x-slot name="time">
        <p>{{ $user->created_at }}</p>
      </x-slot>

    </x-video.reviewspagination>
    @endforeach
  </div>



  {{ $users->links('components.pagination.pagination') }}

</div>

{{-- If your happiness depends on money, you will never be happy with yourself. --}}