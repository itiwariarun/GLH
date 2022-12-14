<div>

  <div class="max-h-[30rem] overflow-y-auto">
    <x-modal>

      <x-slot name="title">
        <p class="text-center font-extrabold dark:text-slate-200">
          Select Gynaecology ailment
        </p>
      </x-slot>
      <x-slot name="content">
        <div
          class="grid items-center justify-center gap-y-10 text-slate-800 overflow-y-auto dark:text-slate-100  pt-10 sm:grid-cols-2 md:grid-cols-4">
          <div class="grid items-center justify-center"
            onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')"><img src="{{ URL::asset('/25.jpg') }}"
              class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
            <p>Myomectomy</p>
          </div>
          <div class="grid items-center justify-center"
            onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')"><img src="{{ URL::asset('/25.jpg') }}"
              class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
            <p>Labiaplasty</p>
          </div>
          <div class="grid items-center justify-center"
            onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')"><img src="{{ URL::asset('/25.jpg') }}"
              class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
            <p>Ovarian Cyst</p>
          </div>
          <div class="grid items-center justify-center"
            onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')"> <img src="{{ URL::asset('/25.jpg') }}"
              class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
            <p>Hysterectomy</p>
          </div>
          <div class="grid items-center justify-center"
            onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')"> <img src="{{ URL::asset('/25.jpg') }}"
              class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
            <p>D & C</p>
          </div>
          <div class="grid items-center justify-center"
            onclick="Livewire.emit('openModal', 'surgery.scroll.ailments.a1')"> <img src="{{ URL::asset('/25.jpg') }}"
              class="max-w-12 min-w-12 mx-auto max-h-12" alt="" />
            <p>Tubal Litigations</p>
          </div>
        </div>
      </x-slot>

    </x-modal>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
  </div>


  {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>