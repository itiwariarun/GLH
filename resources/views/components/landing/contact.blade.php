<div class="py-20">
  <div
    class="flex max-h-[58rem] items-center justify-center bg-black/5 p-12 py-8 shadow-lg shadow-gray-500 dark:bg-transparent xl:mx-40">
    <div class="w-screen h-full px-5 py-10 mx-auto max-w-full-lg from-gray-800 to-slate-700 dark:bg-gradient-to-l">
      <div class="grid gap-5 md:grid-cols-2 xl:gap-10">
        @if (isset($img))
        <div class="flex justify-center md:justify-center">
          {{ $img }}
        </div>
        @endif

        <div class="flex items-start">
          @if (isset($content))
          <div class="mx-auto lg:mx-0">
            {{ $content }}
            @endif

            <form action="" class="flex flex-col mt-4">

              @if (isset($formcontent))
              {{ $formcontent }}
              @endif
              <div>
                @if (isset($send))
                <button type="submit"
                  class="mt-4 min-w-full max-w-[12rem] rounded bg-blue-600 px-14 py-2 text-center text-white dark:bg-white/30">{{
                  $send }}</button>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Stop trying to control. --}}
</div>