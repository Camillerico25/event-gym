<?php

namespace App\Http\Livewire\Gym;

use App\Models\Gym;
use Livewire\Component;
use App\Events\UserLog;

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

            $log_entry = 'Added Gymers: "' . $this->firstname;
            event(new UserLog($log_entry));

            return redirect('/dashboard')->with('message', $this->firstname . ' added successfully');
    }



    public function render()
    {
        return view('livewire.gym.create');
    }
}
