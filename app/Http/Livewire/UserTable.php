<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{

    // Total number of User records within database.
    public $totalRecords;
    //the number of records to load per scroll event.
    public $loadAmount = 10;


    public function mount(){
      $this->totalRecords = User::count();
    }

    public function loadMore()
    {
        $this->loadAmount += 10;
    }

    public function render()
    {
        return view('livewire.user-table')
            ->with('users', User::limit($this->loadAmount)->get()
            );
    }
}
