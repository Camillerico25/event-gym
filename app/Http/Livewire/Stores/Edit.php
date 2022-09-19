<?php

namespace App\Http\Livewire\Stores;
use App\Models\Store;
use Livewire\Component;

class Edit extends Component
{

    public $storeId;
    public $name,$product,$price;


    public function mount(){

        $this->name = $this->store->name;
        $this->product = $this->store->product;
        $this->price = $this->store->price;

    }

    public function editStore()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'product'             => ['required'],
            'price'           => ['required','string','max:255'],
        ]);

        $this->store->update([
            'name'=> $this->name,
            'product'=> $this->product,
            'price'=> $this->price,
        ]);

        return redirect('/dashboard')->with('message', $this->store->name .' updated successfully');
    }


    public function getStoreProperty(){
        return Store::find($this->storeId);
    }

    public function render()
    {
        return view('livewire.stores.edit');
    }
}
