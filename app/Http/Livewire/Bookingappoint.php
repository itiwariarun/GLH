<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Bookingappoint extends ModalComponent
{
    public $name;
    public $Name;
    public $illness;
    public $number;
    public $city;
    public static function modalMaxWidth(): string
    {
        // 'sm'
        // 'md'
        // 'lg'
        // 'xl'
        // '2xl'
        // '3xl'
        // '4xl'
        // '5xl'
        // '6xl'
        // '7xl'
        return '7xl';//this function is for model size
    }
    public function someComponentMethod()
    {
        $this->emit("openModal", "bookingconfirmed", ["name" => $this->name]);


     }
    public static function closeModalOnEscape(): bool
    {
        return false;//so that it not close on pressing escape
    }
    public function render()
    {

        return view('livewire.bookingappoint');
    }
}
