<div>
  <div class="container flex items-center justify-center flex-auto min-w-full ">
    <div class="w-full shadow-lg from-slate-800 to-gray-700 dark:bg-gradient-to-l md:bg-stone-100 xl:py-4">
      <nav class="flex flex-auto">
        <div class="flex items-center justify-center flex-auto md:justify-start xl:justify-end">
          <x-logo>
          </x-logo>
        </div>
        <ul
          class="items-center justify-start flex-auto hidden text-[15px] text-black dark:text-white md:flex md:justify-end xl:justify-start xl:space-x-2 2xl:space-x-3"
          style="font-family: 'Allerta Stencil', sans-serif;">
          <li class="hidden xl:block"><a href={{ url('/finddoctors') }}><button class="{{ (request()->is('finddoctors'))
                ? 'bg-cyan-600 text-slate-50 px-1.5' :' shadow-b-md pb-1 focus:shadow-b-sm
                cursor-pointer  border-0  leading-3 focus:border-b-2 focus:border-b-cyan-600
                focus:shadow-cyan-300 focus:outline-none '}} rounded-xl py-1.5 lg:mx-1 ">

                Find Doctors
                {{-- <p class="p">Book an appointment</p> --}}
              </button></a></li>
          <li class="hidden xl:block"><a href={{ url('/video') }}><button class="{{ (request()->is('video'))
                ? 'bg-cyan-600 text-slate-50 px-1.5' :' shadow-b-md pb-1 focus:shadow-b-sm
                cursor-pointer  border-0  leading-3 focus:border-b-2 focus:border-b-cyan-600
                focus:shadow-cyan-300 focus:outline-none '}} rounded-xl py-1.5 lg:mx-1 ">
                Video Consult
                {{-- <p class="p1">Consult top doctors</p> --}}
              </button></a></li>
          <li class="hidden xl:block"><a href={{ URL('/medpharmacy') }}><button class="{{ (request()->is('medpharmacy'))
                ? 'bg-cyan-600 text-slate-50 px-1.5' :' shadow-b-md pb-1 focus:shadow-b-sm
                cursor-pointer  border-0  leading-3 focus:border-b-2 focus:border-b-cyan-600
                focus:shadow-cyan-300 focus:outline-none '}} rounded-xl py-1.5 lg:mx-1 ">
                <p class="">
                  Medicines</p>
                {{-- <p class="p2">Glh pharmacy</p> --}}
              </button></li>
          <li class="hidden xl:block"><a href="{{ url('/labs') }}"><button data-modal-toggle="city-modal" class="{{ (request()->is('labs'))
                ? 'bg-cyan-600 text-slate-50 px-1.5' :' shadow-b-md pb-1 focus:shadow-b-sm
                cursor-pointer  border-0  leading-3 focus:border-b-2 focus:border-b-cyan-600
                focus:shadow-cyan-300 focus:outline-none '}} rounded-xl py-1.5 lg:mx-1 ">
                Lab Tests
                {{-- <p class="p3">Book tests & checkup</p> --}}
              </button></a></li>
          <li class="hidden xl:block 2xl:pr-14"><a href="{{ url('/surgery') }}"><button class="{{ (request()->is('surgery'))
                ? 'bg-cyan-600 text-slate-50 px-1.5' :' shadow-b-md pb-1 focus:shadow-b-sm
                cursor-pointer  border-0  leading-3 focus:border-b-2 focus:border-b-cyan-600
                focus:shadow-cyan-300 focus:outline-none '}} rounded-xl py-1.5 lg:mx-1 ">
                Surgeries
                {{-- <p class="p4">Expert surgical care</p> --}}
              </button></a></li>
          <li class="xl:pl-20">
            <x-dropdown.dropdown2>
              <x-slot name="heading">
                <span>For Providers</span>
              </x-slot>

              <x-slot name="a1"><a href="{{ url('/providers') }}" class="flex">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">

                    <p class="text-sm">Providers</p>

                  </div>
                </a>
              </x-slot>



              <x-slot name="a2"><a href="{{ url('/providers/Prime') }}" class="flex">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3 ">

                    <p class="text-sm ">Prime</p>

                  </div>
                </a>
              </x-slot>



              <x-slot name="a3"><a href="{{ url('/providers/hospitals') }}" class="flex">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">

                    <p class="text-sm">Hospitals</p>

                  </div>
                </a>
              </x-slot>

            </x-dropdown.dropdown2>
          </li>
          <li>
            <x-dropdown.dropdown2>
              <x-slot name="heading">
                <span>Security
                  & Help</span>
              </x-slot>
              <x-slot name="a1">
                <div class="p-3 text-white bg-teal-500 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                    <path
                      d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                    </path>
                  </svg>
                </div>
                <div class="ml-3">
                  <a href="{{ url('/surgeries') }}">
                    <p class="font-semibold">A</p>
                    <p class="text-sm">customization</p>
                  </a>
                </div>
              </x-slot>

              <x-slot name="a2">
                <div class="p-3 text-white bg-teal-500 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                    <path
                      d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                    </path>
                  </svg>
                </div>
                <div class="ml-3">
                  <a href="{{ url('/surgeries') }}">
                    <p class="font-semibold">A1</p>
                    <p class="text-sm">Statistics</p>
                  </a>
                </div>
              </x-slot>

              <x-slot name="a3">
                <div class="p-3 text-white bg-teal-500 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                    <path
                      d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                    </path>
                  </svg>
                </div>
                <div class="ml-3">
                  <a href="{{ url('/surgeries') }}">
                    <p class="font-semibold">c</p>
                    <p class="text-sm">Comments</p>
                  </a>
                </div>
              </x-slot>
            </x-dropdown.dropdown2>
          </li>
          <li>
            <a class="md:pr-5 xl:pr-0" href="{{ url('/login') }}"> <button
                class="shadow-b-md focus:shadow-b-sm ml-2 cursor-pointer rounded-xl border-2 border-slate-500 px-4 py-2.5 text-center text-[13px] leading-3 text-black focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none dark:text-white">
                Login/Signup
              </button></a>
          </li>
        </ul>

      </nav>

      <div class="mt-2 block w-full text-[10px] font-normal dark:text-gray-400 xl:hidden"
        style="font-family: 'Allerta Stencil', sans-serif;">
        <div x-data="{ open: false }">
          <button @click="open = !open"
            class="w-full px-3 py-2 text-xl text-left border-none bg-stone-400 text-stone-900 dark:bg-cyan-700 dark:text-white">Online
            Consultation
            <span class="float-right"><i :class="{ 'hidden': !open }"
                class="fa-solid fa-circle-chevron-up text-slate-300" @click="open = true"></i>
              <i :class="{ 'hidden': open }" class="fa-solid fa-circle-chevron-down text-slate-50"
                @click="open = false"></i>
            </span></button>

          <ul x-show="open" @click.outside="open = false" class="px-1 py-1 space-y-2 bg-stone-200 dark:bg-gray-900">
            <li><span><i class="w-1/12 pt-2 m-auto text-lg text-center fa-solid fa-user-doctor"></i></span><a
                href="{{ url('/finddoctors') }}"><button
                  class="{{ (request()->is('finddoctors'))
                ? 'bg-cyan-600 text-slate-50 ':'shadow-b-md  focus:shadow-b-sm  border-0  leading-3 focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none'}}  cursor-pointer rounded-xl px-1 py-2.5 pr-1.5">
                  <p class="pb-1 text-left text-[13px] ">
                    Find Doctors
                  </p>
                  <p>Book an appointment</p>
                </button></a></li>
            <span><i class="w-1/12 pt-1 m-auto text-lg text-center fa-solid fa-tv"></i></span>
            <a href="{{ url('/video') }}"><button
                class="{{ (request()->is('video'))
                ? 'bg-cyan-600 text-slate-50 ':'shadow-b-md  focus:shadow-b-sm  leading-3 focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none'}} cursor-pointer rounded-xl border-0 px-1 py-2.5 pr-1.5">
                <p class="pb-1 text-left text-[13px] ">
                  Video
                  Consult</p>
                <p>Consult top doctors</p>
              </button></a></li>
            <li><span>
                <i class="w-1/12 pt-1 m-auto text-lg text-center fa-solid fa-pills"></i></span>
              <a href="{{ url('/medpharmacy') }}"><button
                  class="{{ (request()->is('medpharmacy'))
                ? 'bg-cyan-600 text-slate-50 ':'shadow-b-md  focus:shadow-b-sm  leading-3 focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none'}}  cursor-pointer rounded-xl border-0 px-1 py-2.5 pr-1.5">
                  <p class="pb-1 text-left text-[13px] ">
                    Medicines
                  </p>
                  <p>Glh pharmacy</p>
                </button></a>
            </li>

            <li><span><i class="w-1/12 pt-1 m-auto text-lg text-center fa-solid fa-vials"></i></span><a
                href="{{ url('/labs') }}"><button data-modal-toggle="city-modal"
                  class="{{ (request()->is('labs'))
                ? 'bg-cyan-600 text-slate-50 ':'shadow-b-md  focus:shadow-b-sm  leading-3 focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none'}}  cursor-pointer rounded-xl border-0 px-1 py-2.5 pr-1.5">
                  <p class="pb-1 text-left text-[13px] ">
                    Lab Tests
                  </p>
                  <p>Book tests & checkup</p>
                </button></a></li>
            <i class="w-1/12 pt-1 m-auto text-lg text-center fa-solid fa-suitcase-medical"></i></span>
            <a href="{{ url('/surgery') }}"><button
                class="{{ (request()->is('surgery'))
                ? 'bg-cyan-600 text-slate-50 ':'shadow-b-md  focus:shadow-b-sm  leading-3 focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none'}}  cursor-pointer rounded-xl border-0 px-1 py-2.5 pr-1.5">
                <p class="pb-1 text-left text-[13px] ">
                  Surgeries
                </p>
                <p>Expert surgical care</p>
              </button></a></li>
            <li class="md:hidden">
              <x-dropdown.dropdown>
                <x-slot name="heading" class=""><span><i
                      class="mx-2 mt-2 text-lg fa-solid fa-tower-broadcast dark:text-gray-400"></i></span>
                  <span class="px-1">For
                    Providers</span>
                </x-slot>

                <x-slot name="a2"><a href="{{ url('/providers') }}" class="flex">
                    <div class="p-3 text-white bg-teal-500 rounded-lg">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                        <path
                          d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                        </path>
                      </svg>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm">Providers</p>

                    </div>
                  </a>
                </x-slot>



                <x-slot name="a1" href="#"><a href="{{ url('/providers') }}" class="flex">
                    <div class="p-3 text-white bg-teal-500 rounded-lg">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                        <path
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                      </svg>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm">Prime</p>

                    </div>
                  </a>
                </x-slot>



                <x-slot name="a3" href="#">
                  <a href="{{ url('/providers/hospitals') }}" class="flex">
                    <div class="p-3 text-white bg-teal-500 rounded-lg">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                        <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z">
                        </path>
                        <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z">
                        </path>
                      </svg>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm">Hospitals</p>

                    </div>
                  </a>
                </x-slot>

              </x-dropdown.dropdown>
            </li>
            <li class="md:hidden">
              <x-dropdown.dropdown>

                <x-slot name="heading" class=""><span><i
                      class="mx-2 mt-2 text-lg fa-solid fa-file-shield dark:text-gray-400"></i></span>
                  <span class="px-1">Security
                    & Help</span>
                </x-slot>
                <x-slot name="a1">

                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <a href="{{ url('/labs') }}">
                      <p class="font-semibold">A</p>
                      <p class="text-sm">customization</p>
                    </a>
                  </div>

                </x-slot>

                <x-slot name="a2">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <a href="{{ url('/labs') }}">
                      <p class="font-semibold">c</p>
                      <p class="text-sm">Comments</p>
                    </a>
                  </div>
                </x-slot>

                <x-slot name="a3" href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z">
                      </path>
                      <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <a href="{{ url('/labs') }}">
                      <p class="font-semibold">A1</p>
                      <p class="text-sm">Statistics</p>
                    </a>
                  </div>
                </x-slot>
              </x-dropdown.dropdown>

            </li>
            <li class="md:hidden"><span><i class="mx-2 mt-2 text-lg fa-solid fa-arrow-right-to-bracket"></i></span>
              <a href="{{ url('/login') }}"> <button
                  class="shadow-b-md focus:shadow-b-sm ml-1.5 cursor-pointer rounded-xl border-0 px-1 py-2.5 pl-0.5 pr-3 text-[13px] leading-3 text-black focus:border-b-2 focus:border-b-cyan-600 focus:shadow-cyan-300 focus:outline-none dark:text-white">
                  Login/Signup
                </button></a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>



</div>