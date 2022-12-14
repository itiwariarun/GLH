<?php
namespace App\Http\Livewire\Doctor\List;
use App\Models\User;
use Livewire\Component;

class Doctorloading extends Component
{
    public $perPage = 3;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];
    public function loadMore(){
        $this->perPage = $this->perPage + 3;
    }

    public function render()
    {
        $users = User::latest()->paginate($this->perPage);
        $this->emit('Store');
        return view('livewire.doctor.list.doctorloading',['users' => $users]);
    }
}