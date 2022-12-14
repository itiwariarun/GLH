<?php

namespace App\Http\Livewire\Surgery\Scroll\Ailments;

use Livewire\Component;

use LivewireUI\Modal\ModalComponent;

class C1 extends ModalComponent
{
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
        return 'md';//this function is for model size
    }
    public function render()
    {
        return view('livewire.surgery.scroll.ailments.c1');
    }
}
