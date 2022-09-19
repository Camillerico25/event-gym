<?php

namespace App\Http\Livewire\Gym;

use App\Models\Gym;
use Livewire\Component;

class Index extends Component
{
    public function loadGym() {
        $gym = Gym::orderBy('firstname')->get();

        return compact('gym');
    }

    public function render()
    {
        return view('livewire.gym.index', $this->loadGym());
    }
}
