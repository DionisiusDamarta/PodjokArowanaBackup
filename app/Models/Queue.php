<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = [
        'product_id',
        'qty',
        'total'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
