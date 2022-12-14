@props(['formAction' => false])

<div class="bg-stone-100 dark:bg-slate-500">
  @if ($formAction)
    <form wire:submit.prevent="{{ $formAction }}">
  @endif
  <div class="bg-stone-300 p-4 dark:bg-gray-700 sm:px-6 sm:py-4">
    @if (isset($title))
      <h3 class="space-y-4 text-lg font-medium leading-6 text-gray-900">
        {{ $title }}
      </h3>
    @endif
  </div>
  <div class="bg-stone-100 px-4 dark:bg-slate-500 sm:p-6">
    <div class="space-y-6">
      {{ $content }}

    </div>
  </div>
  @if (isset($button))
    <div
      class="mx-2.5 mt-2 grid items-center justify-center space-y-3 bg-stone-100 px-4 pb-5 dark:bg-slate-500 sm:flex sm:px-4 md:grid-cols-2 md:items-end md:justify-end md:space-y-0 md:space-x-3">
      {{ $button }}
    </div>
  @elseif (isset($buttons))
    <div
      class="mx-auto mt-2 grid items-center justify-center space-y-3 bg-stone-100 px-4 pb-5 dark:bg-slate-500 sm:flex sm:px-4 md:mx-14 md:grid-cols-2 md:items-end md:justify-end md:space-y-0 md:space-x-3">
      {{ $buttons }}
    </div>
  @endif

  <div class="bg-stone-300 p-4 dark:bg-gray-700 sm:px-6 sm:py-4">
    @if (isset($footer))
      <h3 class="space-y-4 text-lg font-medium leading-6 text-gray-900">
        {{ $footer }}
      </h3>
    @endif

  </div>
  @if ($formAction)
    </form>
  @endif

</div>
