<div>
  <div class="-mb-20 bg-white/20 dark:bg-black/20">

    <div class="container flex flex-col min-w-full my-5 overflow-hidden shadow-sm border-w-64 md:flex-row md:py-10"
      x-data="{ review: 2 }" x-cloak>

      <div class="w-full px-16 md:px-32 xl:px-64">
        <h1 class="py-6 text-3xl font-black text-center text-gray-800">Thousands of Happy
          Customers</h1>

        <div class="relative flex flex-col h-full">
          <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-indigo-400 fill-current md:h-16 md:w-16"
              viewBox="0 0 24 24">
              <path
                d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
            </svg>
          </div>

          <div class="relative z-10 h-full">
            {{-- next item --}}
            <x-medpharma.review x-show.immediate="review === 1">
              <x-slot name="review" x-show.transition="review == 1">
                Very professional phlebo. Excellent job in collecting the sample. No
                pain at
                all. Got my report also within 24 hours.
              </x-slot>
            </x-medpharma.review>
            {{-- next item --}}
            <x-medpharma.review x-show.immediate="review === 2">
              <x-slot name="review" x-show.transition="review == 2">
                Everything went very well and smoothly. Technician was right on time.
                Really
                happy with the service.
              </x-slot>
            </x-medpharma.review>
            {{-- next item --}}
            <x-medpharma.review x-show.immediate="review === 3">
              <x-slot name="review" x-show.transition="review == 3">
                Good service, GHL is avoiding to stand in que for health checkup and fast check-up and treatment.
              </x-slot>
            </x-medpharma.review>
            <x-medpharma.review x-show.immediate="review === 4">
              <x-slot name="review" x-show.transition="review == 4">
                Good service, GHL is avoiding to stand in que for health checkup.
              </x-slot>
            </x-medpharma.review>
          </div>

          <div class="flex items-center justify-center my-4">
            <button @click.prevent="review = 1"
              class="inline-block mx-2 font-bold text-center rounded-full shadow-xs focus:shadow-outline focus:outline-none"
              :class="{
                    'h-12 w-12 opacity-25 bg-indigo-400 text-gray-800': review !=
                        1,
                    'h-16 w-16 opacity-100 bg-indigo-600 text-white': review == 1
                }">JD</button>
            <button @click.prevent="review = 2"
              class="inline-block w-16 h-16 mx-2 font-bold text-center bg-indigo-600 rounded-full shadow-xs focus:shadow-outline focus:outline-none"
              :class="{
                    'h-12 w-12 opacity-25 bg-indigo-400 text-gray-800': review !=
                        2,
                    'h-16 w-16 opacity-100 bg-indigo-600 text-white': review == 2
                }">WD</button>
            <button @click.prevent="review = 3"
              class="inline-block w-12 h-12 mx-2 font-bold text-center bg-indigo-600 rounded-full shadow-xs focus:shadow-outline focus:outline-none"
              :class="{
                    'h-12 w-12 opacity-25 bg-indigo-400 text-gray-800': review !=
                        3,
                    'h-16 w-16 opacity-100 bg-indigo-600 text-white': review == 3
                }">JW</button>
            <button @click.prevent="review = 4"
              class="inline-block mx-2 font-bold text-center rounded-full shadow-xs focus:shadow-outline focus:outline-none"
              :class="{
                    'h-12 w-12 opacity-25 bg-indigo-400 text-gray-800': review !=
                        4,
                    'h-16 w-16 opacity-100 bg-indigo-600 text-white': review == 4
                }">AR</button>
          </div>
          <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
            <div x-show="review == 1">
              <x-medpharma.reviewbtn>
                <x-slot name="name">J.
                  D</x-slot>
                <x-slot name="info">Anonymous</x-slot>
              </x-medpharma.reviewbtn>
            </div>
            <div x-show="review == 2">
              <x-medpharma.reviewbtn>
                <x-slot name="name">W.
                  D</x-slot>
                <x-slot name="info">Anonymous</x-slot>
              </x-medpharma.reviewbtn>
            </div>
            <div x-show="review == 3">
              <x-medpharma.reviewbtn>
                <x-slot name="name">J.
                  W</x-slot>
                <x-slot name="info">Anonymous</x-slot>
              </x-medpharma.reviewbtn>
            </div>
            <div x-show="review == 4">
              <x-medpharma.reviewbtn>
                <x-slot name="name">A.
                  W</x-slot>
                <x-slot name="info">Anonymous</x-slot>
              </x-medpharma.reviewbtn>
            </div>
          </div>

        </div>
      </div>
    </div>

    {{-- Care about people's approval and you will be their prisoner. --}}
  </div>
  <center>
    <hr class="flex w-10/12 pb-12 border-gray-400">
  </center>
</div>