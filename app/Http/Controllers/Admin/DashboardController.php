<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\ProductInventory;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'iventory';
        $this->data['currentAdminSubMenu'] = 'tambah';
    }
    function index()
    {
        $this->data['transaksi'] = Transaction::count();
        $this->data['masuk'] = Transaction::where('jenis_transaksi',1)->sum('jumlah');
        $this->data['keluar'] = Transaction::where('jenis_transaksi',2)->sum('jumlah');
        $this->data['pemasukan'] = Order::sum('grand_total');
        $this->data['sales'] = Transaction::where('jenis_transaksi',2)
                                ->groupBy('product_id')
                                ->selectRaw('product_id, sum(jumlah) as jumlah')
                                ->orderBy('jumlah','DESC')
                                ->take(5)
                                ->get();
        $this->data['inventories'] = ProductInventory::all();
        return view('admin.dashboard.index',$this->data);
    }
}