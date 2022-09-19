<?php

namespace App\Http\Livewire\Stores;

use App\Models\Store;
use Livewire\Component;

class Index extends Component
{
    public function loadStore() {
        $stores = Store::orderBy('name')->get();

        return compact('stores');
    }

    public function render()
    {
        return view('livewire.stores.index', $this->loadStore());
    }
}
