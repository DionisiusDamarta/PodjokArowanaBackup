<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::orderBy('created_at','desc')->paginate(10);
        return view('admin.transactions.index',['transactions' => $transactions]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $products = Product::orderBy('name', 'asc')->paginate(10);
        return view('admin.inventories.index', ['products'=>$products]);
    }

    public function masuk($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.transactions.form', ['product' => $product]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_id = $request->product_id;
        $this->data['product_id'] = $product_id;
        $this->data['jenis_transaksi'] = $request->jenis_transaksi;
        $this->data['jumlah'] = $request->jumlah;
        $this->data['jumlah_awal'] = ProductInventory::where('product_id', '=', $product_id)->firstOrFail()->qty;
        Transaction::create($this->data);
        app('App\Http\Controllers\Admin\InventoryController')->update($this->data);
        return redirect('/admin/inventories');
    }

    public function storeTransaction($request)
    {
        $product_id = $request['product_id'];
        $this->data['product_id'] = $product_id;
        $this->data['jenis_transaksi'] = $request['jenis_transaksi'];
        $this->data['jumlah'] = $request['qty'];
        $this->data['jumlah_awal'] = ProductInventory::where('product_id', '=', $product_id)->firstOrFail()->qty;
        Transaction::create($this->data);
        app('App\Http\Controllers\Admin\InventoryController')->update($this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
