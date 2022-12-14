<div class="z-40 w-full py-10">
  <h1 class="flex px-2 py-8 font-serif text-2xl font-extrabold text-gray-900">Our new-age
    clinics
    with the
    latest
    high-tech equipments</h1>
  <div class="flex-shrink-0 -mt-3">
    <div x-data="photoGalleryApp" class="flex flex-col max-w-xl">
      <div class="flex justify-center w-full sm:w-108">
        <img x-ref="mainImage" class="w-full sm:h-80 sm:w-auto" src="" loading="lazy" />
      </div>
      {{-- buttons --}}
      <div class="grid justify-center grid-cols-3 mt-3 gap-y-8 gap-x-3 md:flex">
        <img src="{{ URL::asset('/11.jpg') }}" :class="{ 'ring-2 opacity-50': currentPhoto == 0 }" class="w-20 h-16"
          x-on:click="pickPhoto(0)">
        <img src="{{ URL::asset('/21.jpg') }}" :class="{ 'ring-2 opacity-50': currentPhoto == 1 }" class="w-20 h-16"
          x-on:click="pickPhoto(1)">
        <img src="{{ URL::asset('/22.jpg') }}" :class="{ 'ring-2 opacity-50': currentPhoto == 2 }" class="w-20 h-16"
          x-on:click="pickPhoto(2)">
        <img src="{{ URL::asset('/29.jpg') }}" :class="{ 'ring-2 opacity-50': currentPhoto == 3 }" class="w-20 h-16"
          x-on:click="pickPhoto(3)">
        <img src="{{ URL::asset('/44.jpg') }}" :class="{ 'ring-2 opacity-50': currentPhoto == 4 }" class="w-20 h-16"
          x-on:click="pickPhoto(4)">
      </div>
    </div>
  </div>
  <div class="grid w-full justify-center gap-8 px-14 text-sm font-extrabold tracking-wide text-gray-800 sm:w-[30rem]">
    <h2 class="mt-10 -mb-2 text-xl font-extrabold tracking-wide text-gray-900">GLH Care
      Benefits</h2>
    <div class="flex space-x-3">
      <img src="{{ URL::asset('/25.jpg') }}" alt="" class="w-12 h-12">
      <div class="space-y-1">
        <h3>Expert Surgeons</h3>
        <p class="font-extralight">Qualified & Experienced Specialists</p>
      </div>
    </div>
    <div class="flex space-x-3">
      <img src="{{ URL::asset('/25.jpg') }}" alt="" class="w-12 h-12">
      <div class="space-y-1">
        <h3>Advanced Surgical Procedures</h3>
        <p class="font-extralight">Employing Modern and cutting edge technologies</p>
      </div>
    </div>
    <div class="flex space-x-3">
      <img src="{{ URL::asset('/25.jpg') }}" alt="" class="w-12 h-12">
      <div class="space-y-1">
        <h3>Personal Care Assistants</h3>
        <p class="font-extralight">Assistance at every step of your journey Post-operative
          Care & Support</p>
      </div>
    </div>
    <div class="flex space-x-3">
      <img src="{{ URL::asset('/25.jpg') }}" alt="" class="w-12 h-12">
      <div class="space-y-1">
        <h3>Financial Aid & Assistance</h3>
        <p class="font-extralight">100% transparency in Pricing and No-cost EMI Options
          Available</p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/gallery.js') }}"></script>

</div>












{{-- buttons --}}
{{-- <div class="flex items-center sm:h-80">
  <div :class="{ 'cursor-not-allowed opacity-50': !hasPrevious() }" class="hidden cursor-pointer sm:block">
    <svg version="1.0" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor"
      class="h-8" x-on:click="previousPhoto()">
      <path d="m42.166 55.31-24.332-25.31 24.332-25.31v50.62z" fill-rule="evenodd" stroke-linecap="round"
        stroke-linejoin="round" stroke-width="3.125" />
    </svg>
  </div>

  <div :class="{ 'cursor-not-allowed opacity-50': !hasNext() }" class="hidden cursor-pointer sm:block">
    <svg version="1.0" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor"
      class="h-8" x-on:click="nextPhoto()">
      <path d="m17.834 55.31 24.332-25.31-24.332-25.31v50.62z" fill-rule="evenodd" stroke-linecap="round"
        stroke-linejoin="round" stroke-width="3.125" />
    </svg>
  </div>
</div> --}}






{{-- tab content --}}
{{-- <div>
  <div x-data="{ activeTab: 1 }" class="container mx-auto">
    <ul class="flex justify-center space-x-2 text-white">
      <li>
        <a href="#" x-on:click="activeTab = 1" class="inline-block px-4 py-2 bg-purple-500">Tab 1</a>
      </li>
      <li>
        <a href="#" x-on:click="activeTab = 2" class="inline-block px-4 py-2 bg-purple-500">Tab 2</a>
      </li>
      <li>
        <a href="#" x-on:click="activeTab = 3" class="inline-block px-4 py-2 bg-purple-500">Tab 3</a>
      </li>
    </ul>
    <div class="p-3 mt-6 bg-white border">
      <div x-show="activeTab === 1"> Tab 1 Content show ... </div>
      <div x-show="activeTab === 2">Tab 2 Content show ...</div>
      <div x-show="activeTab === 3">Tab 3 Content show ....</div>
    </div>
  </div>

</div> --}}