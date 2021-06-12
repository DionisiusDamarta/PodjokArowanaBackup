<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'product_id',
        'jenis_transaksi',
        'jumlah',
        'jumlah_awal',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
