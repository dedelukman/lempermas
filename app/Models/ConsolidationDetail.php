<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsolidationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaction',       
        'product_id',       
        'purchase',        
        'sale',        
        'return',        
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
