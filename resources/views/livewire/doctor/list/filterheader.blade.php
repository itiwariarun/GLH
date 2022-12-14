<div class="sticky top-0 z-10 mt-44 md:mt-24">
  {{-- doctor filters --}}
  <div class=" md:my-10 md:mt-6">
    <div class="container flex items-center justify-center flex-auto min-w-full truncate">
      <div
        class="w-full mx-1 rounded-lg shadow-lg h-18 bg-stone-300 from-blue-900 to-blue-800 opacity-90 dark:bg-gradient-to-l md:columns-2 md:py-2">
        <nav class="flex flex-auto px-8 3xl:px-0 2xl:px-0">
          <ul class="items-center justify-end flex-auto hidden space-x-8 text-xs dark:text-gray-400 md:flex"
            style="font-family: 'Allerta Stencil', sans-serif;">

            <button
              class="px-3 py-2 font-normal leading-3 text-black border-0 rounded-md cursor-pointer text-md shadow-b-md bg-white/50">
              <p class="bg-blue"><input type="radio" class="rounded-none" />
                <span class="font-bold">Video Consult</span>
              </p>
            </button>
            <x-dropdown.filterdopdown1 class="text-gray-800 bg-white/40 ">
              <x-slot name="filtername" class="">Availability</x-slot>


              <x-slot name="filter">
                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="{{ url('/surgeries') }}">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Available </p>
                    <p class="text-sm">Today</p>
                  </div>
                </a>

                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Available</p>
                    <p class="text-sm">Tomorrow</p>
                  </div>
                </a>

                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                      <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Available</p>
                    <p class="text-sm">In next 7 days</p>
                  </div>
                </a>
              </x-slot>
            </x-dropdown.filterdopdown1>

            <x-dropdown.filterdopdown1 class="dark:text-gray-200">
              <x-slot name="filtername">All Filters</x-slot>


              <x-slot name="filter">
                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="{{ url('/surgeries') }}">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3 space-y-2 ">
                    <p class="mb-2 font-semibold text-slate-100">Gender</p>
                    <p class="text-sm text-slate-100"><input type="radio" class="mr-1 rounded-none" name="Male"
                        id="male">Male</p>
                    <p class="text-sm text-slate-100"><input type="radio" class="mr-1 rounded-none" name="Female"
                        id="female">Female</p>

                  </div>
                </a>

                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Consultation Fee</p>
                    <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="free"
                        id="free">Free</p>
                    <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="1"
                        id="1">1-200</p>
                    <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="2"
                        id="2">201-500</p>
                    <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="3"
                        id="3">501+</p>

                  </div>
                </a>
              </x-slot>

            </x-dropdown.filterdopdown1>
            <x-dropdown.filterdopdown1 class="text-gray-800 bg-white/40">
              <x-slot name="type">Sort By</x-slot>
              <x-slot name="filtername" class="mr-2">Relevance</x-slot>

              <x-slot name="filter">
                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="{{ url('/surgeries') }}">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm">Earliest Available</p>
                  </div>
                </a>

                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm">Price - Low to High</p>
                  </div>
                </a>

                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                      <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm">Price - High to Low</p>
                  </div>
                </a>
                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                      <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm">Years of Experience</p>
                  </div>
                </a>
                <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                  href="#">
                  <div class="p-3 text-white bg-teal-500 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                      <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                      <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm">Price - High to Low</p>
                  </div>
                </a>
              </x-slot>

            </x-dropdown.filterdopdown1>

          </ul>

        </nav>

        <div class="block w-full text-[10px] font-normal dark:text-gray-400 md:hidden"
          style="font-family: 'Allerta Stencil', sans-serif;">
          <div x-data="{ open: false }">
            <button @click="open = !open"
              class="w-full px-3 py-2 text-xl text-left border-0 bg-stone-400 text-stone-900 dark:bg-cyan-900 dark:text-white">Apply
              Filters
              <span class="float-right"><i :class="{ 'hidden': !open }"
                  class="fa-solid fa-circle-chevron-up text-slate-300" @click="open = true"></i>
                <i :class="{ 'hidden': open }" class="fa-solid fa-circle-chevron-down text-slate-50"
                  @click="open = false"></i>
              </span></button>

            <ul x-show="open" @click.outside="open = false"
              class="py-4 space-x-3 space-y-3 bg-stone-200 dark:bg-gray-900">

              <li class="px-4 space-x-4"> <button
                  class="text-md shadow-b-md cursor-pointer rounded-md border-0 bg-white py-1.5 px-3 font-normal leading-3 text-black opacity-70">
                  <p class="bg-blue"><input type="radio" class="rounded-none" />
                    <span class="font-black">Video Consult</span>
                  </p>
                </button>
              </li>





              <li class="space-x-3">
                <x-dropdown.filterdropdown2>
                  <x-slot name="filter"><span><i
                        class="mt-2 mr-4 text-lg fa-solid fa-tower-broadcast dark:text-gray-400"></i></span>Availability
                  </x-slot>
                  <x-slot name="filterdata">
                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="{{ url('/surgeries') }}">
                      <div class="p-3 text-white bg-teal-500 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                          <path
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                          </path>
                        </svg>
                      </div>
                      <div class="ml-3">
                        <p class="font-semibold">Available </p>
                        <p class="text-sm">Today</p>
                      </div>
                    </a>

                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
                      <div class="p-3 text-white bg-teal-500 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                          <path
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                          </path>
                        </svg>
                      </div>
                      <div class="ml-3">
                        <p class="font-semibold">Available</p>
                        <p class="text-sm">Tomorrow</p>
                      </div>
                    </a>

                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
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
                        <p class="font-semibold">Available</p>
                        <p class="text-sm">In next 7 days</p>
                      </div>
                    </a>
                  </x-slot>

                </x-dropdown.filterdropdown2>

              </li>

              <li class="space-x-3">
                <x-dropdown.filterdropdown2>
                  <x-slot name="filter"><span><i
                        class="mt-2 mr-4 text-lg fa-solid fa-tower-broadcast text-gay-800 dark:text-gray-200"></i></span>All
                    Filters
                  </x-slot>



                  <x-slot name="filterdata">
                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="{{ url('/surgeries') }}">
                      <div class="p-3 text-white bg-teal-500 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                          <path
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                          </path>
                        </svg>
                      </div>
                      <div class="ml-3 space-y-2">
                        <p class="mb-2 font-semibold">Gender</p>
                        <p class="text-sm text-slate-100"><input type="radio" class="mr-1 rounded-none" name="Male"
                            id="male">Male</p>
                        <p class="text-sm text-slate-100"><input type="radio" class="mr-1 rounded-none" name="Female"
                            id="female">Female</p>

                      </div>
                    </a>

                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
                      <div class="p-3 text-white bg-teal-500 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                          <path
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                          </path>
                        </svg>
                      </div>
                      <div class="ml-3">
                        <p class="font-semibold">Consultation Fee</p>
                        <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="free"
                            id="free">Free</p>
                        <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="1"
                            id="1">1-200</p>
                        <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="2"
                            id="2">201-500</p>
                        <p class="text-sm text-slate-100"><input type="checkbox" class="mr-1 rounded-full" name="3"
                            id="3">501+</p>

                      </div>
                    </a>
                  </x-slot>

                </x-dropdown.filterdropdown2>


              </li>

              <li>
                <x-dropdown.filterdropdown2>
                  <x-slot name="filter"><span><i
                        class="mt-2 mr-4 text-lg fa-solid fa-tower-broadcast dark:text-gray-400"></i></span>Relevance
                  </x-slot>



                  <x-slot name="filterdata">
                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="{{ url('/surgeries') }}">
                      <div class="p-3 text-white bg-teal-500 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                          <path
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                          </path>
                        </svg>
                      </div>
                      <div class="ml-3">
                        <p class="text-sm">Earliest Available</p>
                      </div>
                    </a>

                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
                      <div class="p-3 text-white bg-teal-500 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 md:h-6 md:w-6">
                          <path
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                          </path>
                        </svg>
                      </div>
                      <div class="ml-3">
                        <p class="text-sm">Price - Low to High</p>
                      </div>
                    </a>

                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
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
                        <p class="text-sm">Price - High to Low</p>
                      </div>
                    </a>
                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
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
                        <p class="text-sm">Years of Experience</p>
                      </div>
                    </a>
                    <a class="flex items-start p-2 bg-transparent rounded-lg row dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 focus:shadow-outline hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none"
                      href="#">
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
                        <p class="text-sm">Price - High to Low</p>
                      </div>
                    </a>
                  </x-slot>

                </x-dropdown.filterdropdown2>

              </li>
            </ul>
          </div>
        </div>
        <div></div>

      </div>

    </div>


  </div>
  {{-- Map. --}}


</div>