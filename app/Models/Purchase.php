<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaction',       
        'description',        
        'total',                    
    ];

    public function purchaseDetail()
    {
        return $this->hasMany(PurchaseDetail::class, 'purchase_id');
    }
}
