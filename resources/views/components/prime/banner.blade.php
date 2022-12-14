<div class="container bg-[white] w-full mx-auto mt-4 md:p-0">

    <!-- Card wrapper -->
    <div class="mx-auto flex w-full flex-wrap shadow-lg">

        <!-- Card image -->
        {{ $img }}
        <!-- ./Card image -->

        <!-- Card body -->
        <div class="w-full bg-transparent py-10 md:w-3/5">
            <!-- Card body - outer wrapper -->
            <div class="relative mx-auto h-full px-6 md:-ml-6 md:px-0 md:pt-6">
                <!-- Card body - inner wrapper -->
                <div
                    class="relative -mt-6 mb-4 grid flex-wrap items-center bg-white p-6 text-gray-700 md:mt-0 md:mb-0 md:flex-wrap lg:h-full">
                    <!-- Card title and subtitle -->
                    <div class="lg:border-right w-full text-center md:text-left lg:w-4/5 lg:border-solid">
                        @if (isset($head))
                        <h3 class="w-full text-5xl font-extrabold uppercase text-indigo-700">{{$head}}</h3>
                        @elseif (isset($head2))
                        <h3 class="w-full text-3xl font-extrabold  ">{{$head2}}</h3>
                        @endif
                        @if (isset($subhead))
                        <p class="mb-0 mt-3 text-lg italic">{{ $subhead }}</p>
                        @endif
                        <hr class="mt-4 w-1/4 border md:ml-0 lg:hidden">
                    </div>
                    <!-- ./Card title and subtitle -->

                    <!-- Card description -->
                    <div class="w-full lg:w-3/5 lg:px-3">
                        <p class="text-md mt-4 text-justify text-lg md:text-left lg:mt-0">

                            {{$para}}
                        </p>
                    </div>
                    <!-- ./Card description -->

                    <!-- Call to action button -->
                    <div class="mt-6 w-full text-center md:text-left lg:mt-0 lg:w-4/5 lg:px-4">
                        <div class="flex justify-center md:justify-end">
                            <button class="mx-4 rounded-md bg-amber-600 py-3 px-4 text-slate-100 hover:bg-amber-700">Get
                                {{ $btn }}</button>
                        </div>
                    </div>
                    <!-- ./Call to action button -->
                </div>
                <!-- ./Card body - inner wrapper -->
            </div>
            <!-- ./Card body - outer wrapper -->
        </div>

    </div>
    <!-- ./Card body -->
</div>