<?php

namespace App\Http\Livewire\Kasir;

use Livewire\Component;
use App\Models\Product;
use App\Models\Queue;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Transaction;

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
            'total' => $transaction->product->price*($transaction->qty + 1)
        ]);

        session()->flash('message', 'qty product berhasil di tambah');
    }

    public function decrement($id)
    {
        $transaction = Queue::find($id);
        $transaction->update([
            'qty' => $transaction->qty - 1,
            'total' => $transaction->product->price*($transaction->qty - 1)
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

    public function save()
    {
        $transaction = Queue::get();

        $order = Order::create([
            'no_order' => 'OD-'.date('Ymd').rand(1111,9999),
            'grand_total' => $transaction->sum('total'),
            'pembayaran' => $this->pembayaran,
            'kembalian' => $this->pembayaran-$transaction->sum('total')
        ]);


        foreach ($transaction as $key => $value) {
            $product = array(
                'order_id' => $order->id,
                'product_id' => $value->product_id,
                'qty' => $value->qty,
                'total' => $value->total,
                'created_at' => \Carbon\carbon::now(),
                'updated_at' => \Carbon\carbon::now()
            );

            $orderProduct = OrderProduct::insert($product);
            
            $productInventory = array(
                'order_id' => $order->id,
                'product_id' => $value->product_id,
                'qty' => $value->qty,
                'jenis_transaksi'=>2,
                'total' => $value->total,
                'created_at' => \Carbon\carbon::now(),
                'updated_at' => \Carbon\carbon::now()
            );

            app('App\Http\Controllers\Admin\TransactionController')->storeTransaction($productInventory);
            
            $deleteTransaction = Queue::where('id', $value->id)->delete();
        }

        // session()->flash('message', 'Transaction berhasil disimpan');
        return redirect()->away('/admin/invoice/'.$order->no_order);
    }
}