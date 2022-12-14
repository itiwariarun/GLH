@extends('livewire.layout.main')
@section('content')
<div>
  <livewire:lab.labsearch />
  <livewire:lab.knowmoreslide />
  <livewire:lab.bookstest />
  <livewire:lab.concerns.healthconcerns />
  <livewire:lab.packages.healthpackages />
  <livewire:lab.top.topbooked />
  <livewire:lab.top.who-we-are />
  <livewire:lab.top.reviewslider />
  <livewire:videoconsult.queries.download />
  <livewire:lab.lastlabnote />
  <livewire:lab.top.bookedmodal />
  <livewire:lab.city.citymodal />
  {{-- Success is as dangerous as failure. --}}
  <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js" defer></script>



</div>
@endsection