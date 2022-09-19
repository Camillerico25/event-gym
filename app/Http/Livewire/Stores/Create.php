<?php

namespace App\Http\Livewire\Stores;

use App\Models\Store;
use Livewire\Component;

class Create extends Component
{
    public $name,$product,$price;

    public function addStore(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'product'             => ['required'],
                'price'           => ['required','string','max:255'],
            ]);

            Store::create([
                'name'        => $this->name,
                'product'             => $this->product,
                'price'           => $this->price,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.stores.create');
    }
}
