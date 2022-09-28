<?php

namespace App\Http\Livewire\Gym;
use App\Models\Gym;
use Livewire\Component;
use App\Events\UserLog;

class Edit extends Component
{

    public $gymId;
    public $firstname,$lastname,$address;


    public function mount(){

        $this->firstname = $this->gym->firstname;
        $this->lastname = $this->gym->lastname;
        $this->address = $this->gym->address;

    }

    public function editMember()
    {
        $this->validate([
            'firstname'        => ['required','string','max:255'],
            'lastname'        => ['required'],
            'address'         => ['required','string','max:255'],
        ]);

        $this->gym->update([
            'firstname'=> $this->firstname,
            'lastname'=> $this->lastname,
            'address'=> $this->address,
        ]);

        $log_entry = 'Update Gymers: "' . $this->gym->firstname . '" with an ID: ' . $this->gym->id;
        event(new UserLog($log_entry));

        return redirect('/dashboard')->with('message', $this->gym->firstname .' updated successfully');
    }


    public function getGymProperty(){
        return Gym::find($this->gymId);
    }

    public function render()
    {
        return view('livewire.gym.edit');
    }
}
