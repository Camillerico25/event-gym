<?php

namespace App\Http\Livewire\Gym;

use App\Models\Gym;
use Livewire\Component;

class Create extends Component
{
    public $firstname,$lastname,$address;

    public function addMember(){

            $this->validate([
                'firstname'        => ['required','string','max:255'],
                'lastname'         => ['required'],
                'address'          => ['required','string','max:255'],
            ]);

            Gym::create([
                'firstname'        => $this->firstname,
                'lastname'         => $this->lastname,
                'address'          => $this->address,
            ]);

            return redirect('/dashboard')->with('message', $this->firstname . ' added successfully');
    }



    public function render()
    {
        return view('livewire.gym.create');
    }
}
