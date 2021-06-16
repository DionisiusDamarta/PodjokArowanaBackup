<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'sku',
        'name',
        'slug',
        'price',
        'weight',
        'length',
        'width',
        'height',
        'short_description',
        'description',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productInventory()
    {
        return $this->hasOne('App\Models\ProductInventory');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'product_categories');
    }

    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
    

    public static function statuses()
    {
        return [
            0 => 'draft',
            1 => 'active',
            2 => 'inactive',
        ];
    }

    function status_label()
    {
        $statuses = $this->statuses();

       return isset($this->status) ? $statuses[$this->status] : null;
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1)
                ->orderBy('created_at', 'DESC');
    }


}
