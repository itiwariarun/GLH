<div>
    <div class="max-h-[80rem] bg-[#aabbcc]">


        <!-- Container -->
        <x-prime.banner>

            <!-- Card image -->
            <x-slot name="img">
                <div class="relative h-[23rem] w-full border bg-[#aabbcc] bg-cover bg-bottom md:w-2/5"
                    style="background-image:url('data:image/png;base64,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')">
                    <div class="absolute text-xl">
                        <i class="mt-4 ml-4 text-red-600 cursor-pointer fa fa-heart hover:text-red-light"></i>
                    </div>
                </div>
            </x-slot>
            <!-- ./Card image -->
            <x-slot name="head">GLH
                Prime</x-slot>
            <x-slot name="subhead">For Clinics & Hospitals</x-slot>

            <!-- Card description -->
            <x-slot name="para">

                A technology product for clinics and hospitals which lets them deliver an
                exceptional
                visit experience to patients.
            </x-slot>
            <!-- ./Card description -->

            <!-- Call to action button -->
            <a href="">
                <x-slot name="btn">Get
                    Free Demo</x-slot>
            </a>

            <!-- ./Card body -->
        </x-prime.banner>
        <!-- ./Card wrapper -->
    </div>
    <!-- ./Container -->
    <x-prime.card>
        <x-slot name="a1">9000+</x-slot>
        <x-slot name="b1">Clinic/Hospitals On Prime
        </x-slot>
        <x-slot name="a2">30Cr+</x-slot>
        <x-slot name="b2">Patients</x-slot>
        <x-slot name="a3">9/10 *</x-slot>
        <x-slot name="b3">Highly Rated By Patients
        </x-slot>
    </x-prime.card>
    {{-- The whole world belongs to you. --}}
</div>