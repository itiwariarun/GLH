<div class="z-50">

    <div x-clock x-data="sidebar()" class="relative  flex items-start">
        <nav class="w-full bg-stone-100 dark:bg-slate-900/90 md:py-2">
            <div class="md:columns-2">
                <div>
                    <div
                        class="flex items-start justify-center flex-auto md:items-center md:justify-start md:pl-20 xl:pb-0 xl:pt-1">

                        <x-logo>
                        </x-logo>
                    </div>
                    <div class="fixed z-40 transition-all duration-300 top-6 left-4 md:top-7 xl:top-4">
                        <div class="flex justify-end">
                            <button class="z-50 p-2 rounded-lg bg-stone-100 dark:bg-slate-900/90"
                                @click="sidebarOpen = !sidebarOpen"
                                :class="{ 'hover:bg-gray-300': !sidebarOpen, 'hover:bg-gray-700': sidebarOpen }"
                                class="w-8 p-1 mx-4 my-2 transition-all duration-300 rounded-full focus:outline-none">
                                <div :class="{ 'dark:text-cyan-500 hover:text-cyan-800 text-cyan-800': !
                      sidebarOpen, 'text-cyan-800 hover:text-cyan-300 dark:text-cyan-300': sidebarOpen }">
                                    <i x-show="!sidebarOpen" class="fa-solid fa-bars-staggered"></i>
                                    <i x-show="sidebarOpen" class="fa-solid fa-xmark"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center justify-center space-x-8 py-7 xl:py-3">
                        <button class="mr-2 font-semibold dark:text-gray-100">Safety of your
                            Data</button>
                        <button
                            class="px-10 py-1 font-extrabold tracking-wider border-2 rounded-full border-cyan-500 text-cyan-500 hover:border-gray-800 hover:text-gray-800 hover:dark:border-gray-100 hover:dark:text-gray-100">Contact
                            Us</button>
                    </div>
                </div>
            </div>
        </nav>
        <div x-clock wire:ignore :class="{ 'w-full md:w-96': sidebarOpen, 'w-0': !sidebarOpen }"
            class="fixed top-0  bottom-0 left-0 z-30 block w-full h-full min-h-screen overflow-x-hidden overflow-y-auto transition-all duration-300 ease-in-out shadow-lg bg-stone-100 dark:bg-slate-900/95 dark:text-gray-400 md:w-96">

            <div class="flex flex-col items-stretch justify-between h-full">
                <div class="flex flex-col flex-shrink-0 w-full">
                    <div class="flex items-center justify-center px-5 py-2 text-center">
                        <a href="#" class="text-lg leading-normal focus:outline-none focus:ring dark:text-gray-200">
                            <x-logo>
                            </x-logo>
                        </a>
                    </div>

                    <div>
                        <div class="flex-grow p-12 overflow-x-hidden md:block md:overflow-y-auto"
                            :class="{ 'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen }">
                            <a class="flex items-center justify-start px-4 py-3 hover:bg-gray-800 hover:text-gray-300 focus:bg-gray-800 focus:text-white focus:outline-none focus:ring"
                                href="/providers/doctors">
                                {{-- icon --}}
                                <span class="mx-4"><i class="mr-3 text-xl fa-solid fa-stethoscope"></i>For
                                    Doctors</span>
                            </a>

                            <a class="{{-- request()->is('dashboard/orders*')?'bg-gray-800':'' --}} flex items-center px-4 py-3 hover:bg-gray-800 hover:text-gray-300 focus:bg-gray-800 focus:text-white focus:outline-none focus:ring"
                                href="/providers/clinics">
                                {{-- icon --}}
                                <span class="mx-4"><i class="mr-3 text-xl fa-solid fa-house-chimney-medical"></i>For
                                    Clinics</span>
                            </a>

                            <a class="flex items-center px-4 py-3 hover:bg-gray-800 hover:text-gray-300 focus:bg-gray-800 focus:text-white focus:outline-none focus:ring"
                                href="/providers/hospitals">
                                {{-- icon --}}
                                <span class="mx-4"><i class="mr-3 text-xl fa-solid fa-hospital"></i>For Hospitals</span>

                            </a>
                            <a class="flex items-center px-4 py-3 hover:bg-gray-800 hover:text-gray-300 focus:bg-gray-800 focus:text-white focus:outline-none focus:ring"
                                href="/">
                                {{-- icon --}}
                                <span class="mx-4"><i class="mr-3 text-xl fa-solid fa-file-invoice"></i>Visit
                                    GLH.com</span>

                            </a>
                            <a href="/">
                                {{-- icon --}}
                                <button
                                    class="px-10 py-1 mx-4 mt-4 font-extrabold tracking-wider border-2 rounded-full border-cyan-500 text-cyan-500 hover:border-gray-800 hover:bg-gray-800 hover:dark:border-gray-100 hover:dark:bg-gray-100">Visit
                                    GLH.com</button>

                            </a>
                        </div>

                    </div>

                </div>
                <div class="flex flex-col items-end p-6 space-y-5">
                    <a title="Logout" href="#" {{-- onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" --}}>
                        <p>Safety Of Your Data</p>
                    </a>
                    <a title="Logout" href="mailto:glh@kmr.com">
                        <p>Help</p>
                    </a>
                    <a title="Logout" href="/company/contact">
                        <p>Contact Us</p>
                    </a>
                    <a title="Logout" href="#">
                        <p>Terms Of Services</p>
                    </a>
                </div>
            </div>

        </div>

    </div>



    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <script type="text/javascript" src="{{ URL::asset('js/headerprovider.js') }}" defer>
    </script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</div>