<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'total'
    ];

    public function namaProduct()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
