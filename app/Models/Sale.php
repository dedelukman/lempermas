<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaction',       
        'customer_id',       
        'description',        
        'subtotal',                    
        'discount',                    
        'discount_value',                    
        'total',                    
        'payment_method',                    
        'bayar',                    
        'kembali',                    
    ];

    public function SaleDetail()
    {
        return $this->hasMany(SaleDetail::class, 'sale_id');
    }
}

