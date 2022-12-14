<?php

namespace App\Http\Livewire\Videoconsult\Online;


use Livewire\WithPagination;

use App\Models\User;
use Livewire\Component;



class Usersexperience extends Component
{
 use WithPagination;



    /**

     * Write code on Method

     *

     * @return response()

     */
    public function render()
    {
        return view('livewire.videoconsult.online.usersexperience', [

            'users' => User::paginate(3),

        ]);
    }
}
