<div>
  <div
    class="my-3 mt-40 flex max-h-[88rem] items-center justify-center bg-transparent p-12 py-8 dark:bg-transparent md:my-1 md:mt-20">
    <div
      class="w-screen h-full px-5 py-8 shadow-lg px-auto max-w-full-lg rounded-xl bg-stone-300 from-gray-900 to-slate-800 shadow-gray-500 dark:bg-gradient-to-l">
      <div class="grid gap-5 md:grid-cols-2 xl:gap-10">
        <div class="flex justify-center md:justify-center">
          {{$img}} </div>
        <div class="flex items-center justify-start">
          <div class="mx-auto lg:mx-0 lg:pl-20 lg:pr-60">
            {{$detail}}
            <form action="" class="flex flex-col mt-4">
              {{$formheading}}

              <div class="">
                <div
                  class="block h-12 max-w-[20rem] rounded border border-white/50 bg-transparent text-white placeholder:text-white/50 md:flex md:shrink-0">
                  <input type="text" class="float-left hidden h-full max-w-[3.2rem] border-0 text-black md:block"
                    value="+91" />
                  <input type="tel"
                    class="float-right w-full h-full text-left border-0 placeholder:text-sm md:max-w-full"
                    placeholder="Enter Phone Number" />
                </div>
              </div>
              <button type="submit"
                class="mt-4 min-w-full max-w-[12rem] rounded bg-blue-600 px-14 py-2 text-center text-white dark:bg-white/30">Send
                Sms</button>
              <div class="grid gap-1 md:grid-cols-2 xl:gap-5"><button type="submit"
                  class="float-left mt-4 min-w-full max-w-[8rem] rounded bg-blue-600 px-3 py-1 text-center text-white dark:bg-white/30 md:w-full"><i
                    class="text-lg fa-brands fa-google-play"></i> &nbsp;&nbsp;Play
                  Store</button>
                <button type="submit"
                  class="float-right mt-4 min-w-full max-w-[8rem] rounded bg-blue-600 px-3 py-1 text-center text-white dark:bg-white/30 md:w-full"><i
                    class="text-xl fa-brands fa-apple"></i> &nbsp;&nbsp;App Store</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Because she competes with no one, no one can compete with her. --}}
</div>