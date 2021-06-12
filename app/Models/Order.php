<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'no_order',
        'grand_total',
        'pembayaran',
        'kembalian'
    ];

    public function productOrder()
    {
        return $this->hasMany('App\Models\OrderProduct', 'order_id');
    }
}
