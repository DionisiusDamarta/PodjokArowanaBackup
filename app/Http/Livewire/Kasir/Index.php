<?php

namespace App\Http\Livewire\Kasir;

use Livewire\Component;
use App\Models\Product;
// use App\Models\Transaction;
// use App\Models\Order;
// use App\Models\OrderProduct;

class Index extends Component
{
    public function render()
    {
        return view('livewire.kasir.index', [
            'products' => Product::orderBY('name', 'asc')->get(),
        ]);
    }
}
