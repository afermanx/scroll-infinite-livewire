<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    public function Users()
    {
        return redirect()->to(route('users'));
    }


    public function render()
    {
        return view('livewire.home');
    }
}
