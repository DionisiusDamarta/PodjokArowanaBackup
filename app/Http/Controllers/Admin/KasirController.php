<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        return view ('kasir.index');
    }

    public function invoice($no_order)
    {
        $order = Order::with('productOrder')->where('no_order', $no_order)->first();

        return view ('kasir.invoice', compact('order'));
    }
}
