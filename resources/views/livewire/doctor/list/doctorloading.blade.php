<div class="">
  <div>
    <div class="mx-6 mr-[1rem] space-y-6 md:mr-[8rem] lg:mr-[16rem] xl:mr-[32rem]">
      {{-- next item --}}
      @foreach ($users as $user)
      <x-doctorcard>


        <x-slot name="img">
          <img class="mx-auto flex h-28 rounded-full md:w-32" src="{{ URL('s.jpg') }}" alt="brad" />
        </x-slot>
        <x-slot name="profile">View
          Profile</x-slot>
        <x-slot name="success">
          82%
        </x-slot>

        <x-slot name="name">
          {{ $user->name }} <x-slot name="field">(Telepathy)
          </x-slot>
        </x-slot>
        <x-slot name="years">18 years
          experience
          overall</x-slot>
        <x-slot name="approved">
          Fullfilled by</x-slot>
        <x-slot name="surgery">
          {{-- <img class="rounded-md  flex md:w-32 my-0.5 md:h-10 dark:bg-white dark:opacity-70 px-4 "
            src="{{ URL::asset('/img/doctors/1.svg') }}" alt="brad" /> --}}Assisted Surgery
          Experience</x-slot>
        <x-slot name="place">Rohini,Delhi <x-slot name="partner"> Glh Care
            Surgeries + 3
            more</x-slot>
        </x-slot>
        <x-slot name="fees">
          &#8377;1000 Consultation
          fee at
          clinic</x-slot>
        <x-slot name="stories">
          9 Patient Stories</x-slot>
        <x-slot name="Available">Available</x-slot>

        <x-slot name="appoinment">Book Appoinment</x-slot>
        <x-slot name="book">No Booking Fee</x-slot>
        <x-slot name="consult">
          Video Consult
        </x-slot>

      </x-doctorcard>
      @endforeach

      {{-- next item --}}


      {{-- next item --}}


      <center><button class="my-6 -mt-1.5 rounded-2xl bg-gray-300 px-4 py-1 text-center font-extrabold text-gray-500"
          wire:click="loadMore">Load More</button></center>

    </div>
  </div>
  {{-- Nothing in the world is as soft and yielding as water. --}}
</div>