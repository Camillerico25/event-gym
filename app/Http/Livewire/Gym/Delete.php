<?php

namespace App\Http\Livewire\Gym;
use App\Models\Gym;
use Livewire\Component;

class Delete extends Component
{

    public $gymId;



    public function getGymProperty(){
        return Gym::find($this->gymId);
    }

    public function render()
    {
        return view('livewire.gym.delete');
    }
    public function delete() {
        $this->gym->delete();

        return redirect('/dashboard')->with('message', $this->gym->firstname . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
