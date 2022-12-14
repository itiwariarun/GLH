<div>
  <div class="space-y-4 py-4 text-center dark:bg-gray-800">

    <p class="py-2 text-center text-4xl font-normal text-cyan-500 xl:pt-0"
      style="font-family: 'Allerta Stencil', sans-serif;">GLH Care</p>


    <div
      class="flex items-center justify-center gap-6 dark:bg-gray-600 xl:gap-0 xl:gap-x-8">


      <div class="mx-3 space-y-4 p-4 py-8">

        <p class="text-lg font-black dark:text-white">Thankyou, {{ $name }} for
          choosing us</p>

      </div>

    </div>
    <button
      class="my-4 rounded-lg border-2 border-stone-700 bg-transparent px-4 py-2 dark:border-gray-800 dark:bg-gray-600 dark:text-white"
      wire:click="$emit('closeModal')">Go Back</button>
    <button
      class="my-4 rounded-lg border-2 bg-transparent px-4 py-2 dark:border-gray-100 dark:text-white"
      wire:click="$emit('closeModal', true)">Done</button>

  </div>



  {{-- Success is as dangerous as failure. --}}
</div>
