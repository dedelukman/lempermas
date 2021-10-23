<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'supplier_id',        
        'photo',                          
        'description',                          
        'price',                    
        'price_discount',                    
        'discount',                    
        'discount_value',                    
        'stock_start',                                   
        'purchase',                                   
        'sale',                                   
        'return',                                   
        'stock_final',                                   
        'active',                                   
    ];

    public function sale()
    {
        return $this->hasMany(Sale::class, 'customer_id');
    }
}
