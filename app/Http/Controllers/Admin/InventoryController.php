<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductInventory;
use App\Models\Product;
use App\Models\Transaction;

class InventoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'iventory';
        $this->data['currentAdminSubMenu'] = 'tambah';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['products'] = Product::orderBy('name', 'asc')->paginate(10);
        return view('admin.inventories.index', $this->data);
    }

    public function stok()
    {
        $this->data['currentAdminMenu'] = 'laporan';
        $this->data['products'] = Product::orderBy('name', 'asc')->paginate(10);
        return view('admin.inventories.stok', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $productInventory = new ProductInventory;
        $productInventory->product_id = $id;
        $productInventory->save();
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
    public function update($inventory)
    {
        $productInventory = ProductInventory::where('product_id', '=', $inventory['product_id'])->firstOrFail();
        
        if ($inventory['jenis_transaksi'] == 1) {
            $productInventory->qty += $inventory['jumlah'];
        }else{
            $productInventory->qty -= $inventory['jumlah'];
        }
        $productInventory->save();
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