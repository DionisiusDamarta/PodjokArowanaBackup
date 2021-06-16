<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;


class KasirController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'transaksi';
        $this->data['currentAdminSubMenu'] = 'penjualan';
    }
    
    public function index()
    {
        return view ('kasir.index',$this->data);
    }

    public function invoice($no_order)
    {
        
        $this->data['order'] = Order::with('productOrder')->where('no_order', $no_order)->first();

        return view ('kasir.invoice', $this->data);
    }
}