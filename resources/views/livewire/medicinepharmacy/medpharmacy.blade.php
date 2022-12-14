@extends('livewire.layout.main')
@section('content')
<div>

  <livewire:medicinepharmacy.search />
  <livewire:medicinepharmacy.slider.slider />
  <livewire:medicinepharmacy.healthmedicine.healthmedicine />
  <livewire:medicinepharmacy.healthmedicine.popularproducts />
  <livewire:medicinepharmacy.byus.getfromus />
  <livewire:medicinepharmacy.byus.userssay />
  <livewire:videoconsult.queries.download />
  <livewire:medicinepharmacy.byus.mednotes />

  {{-- Nothing in the world is as soft and yielding as water. --}}


</div>
@endsection