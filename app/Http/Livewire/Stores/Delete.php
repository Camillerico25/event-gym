<?php

namespace App\Http\Livewire\Stores;
use App\Models\Store;
use Livewire\Component;

class Delete extends Component
{

    public $storeId;



    public function getStoreProperty(){
        return Store::find($this->storeId);
    }

    public function render()
    {
        return view('livewire.stores.delete');
    }
    public function delete() {
        $this->store->delete();

        return redirect('/dashboard')->with('message', $this->store->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
