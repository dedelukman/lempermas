<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaction',       
        'sale_id',       
        'product_id',       
        'unit',        
        'price',        
        'price_discount',        
        'discount',        
        'discount_value',        
        'total',                  
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
