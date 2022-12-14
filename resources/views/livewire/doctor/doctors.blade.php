@extends('livewire.layout.main')
@section('content')
<div>

  <livewire:search.search />
  <livewire:doctor.list.filterheader />
  <livewire:doctor.list.booknow />
  <livewire:doctor.list.doctorloading />
  <livewire:doctor.list.populardoctor />
  <livewire:doctor.list.delhidoctors />

  {{-- Success is as dangerous as failure. --}}
</div>
{{-- Reference from published scripts --}}
@endsection