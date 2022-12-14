<?php

namespace App\Http\Livewire\Videoconsult;

use Livewire\Component;

class Main1 extends Component
{
    public function render()
    {
        return view('livewire.videoconsult.main1')
        ->layout('welcome');
        // ->extends('welcome')
       
    }
}
