<?php

namespace App\Http\Livewire\Kasir;

use Livewire\Component;
use App\Models\Product;
use App\Models\Queue;

class Index extends Component
{
    public $product_id;
    public $pembayaran;

    protected $rules = [
        'product_id' => 'required|unique:queues'
    ];
        
    public function submit()
    {
        $this->validate();
        $transaction = new Queue;
        $transaction->product_id = $this->product_id;
        $transaction->qty = 1;
        $transaction->total = $transaction->product->price;
        $transaction->save();

        session()->flash('message', 'product berhasil di tambah');
    }

    public function deleteTransaction($id)
    {
        $transaction = Queue::find($id);
        $transaction->delete();
        session()->flash('message', 'Transaction berhasil di hapus');
    }

    public function increment($id)
    {
        $transaction = Queue::find($id);
        $transaction->update([
            'qty' => $transaction->qty + 1,
            'total' => $transaction->product->harga_product*($transaction->qty + 1)
        ]);

        session()->flash('message', 'qty product berhasil di tambah');
    }

    public function decrement($id)
    {
        $transaction = Queue::find($id);
        $transaction->update([
            'qty' => $transaction->qty - 1,
            'total' => $transaction->product->harga_product*($transaction->qty - 1)
        ]);

        session()->flash('message', 'qty product berhasil di kurang');
    }

    public function render()
    {
        return view('livewire.kasir.index', [
            'products' => Product::orderBY('name', 'asc')->get(),
            'transactions' => Queue::get()
        ]);
    }
}
