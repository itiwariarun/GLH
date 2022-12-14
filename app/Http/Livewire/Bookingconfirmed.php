<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Bookingconfirmed extends ModalComponent
{
       public function close()
    {
        $this->forceClose()->closeModal();
    }

    public $name;


    public function mount($name)
    {
         $this->name = $name;



    }
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
        return '3xl';//this function is for model size
    }

//     public function someComponentMethod()
// {
//     $this->emit("openModal", "child-modal", ["name" => "Arun"]); to emit name from component
// }
    public function render()
    {

        return view('livewire.bookingconfirmed');
    }
}
