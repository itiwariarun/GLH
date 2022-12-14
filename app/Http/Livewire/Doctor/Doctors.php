<?php

namespace App\Http\Livewire\Doctor;
use Livewire\WithPagination;

use Livewire\Component;

class Doctors extends Component
{

    public function render()
    {

        return view('livewire.doctor.doctors');
    }
}
