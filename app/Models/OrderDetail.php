<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'products_order';
    protected $primaryKey = ['cart_id', 'product_id'];
    public $incrementing = false;
    protected $guarded =  [];


    public function cart()
    {
        return $this->belongsTo(Cart::class,'cart_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
