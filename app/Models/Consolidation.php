<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consolidation extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaction',       
        'supplier_id',       
        'description',        
        'total',                    
        'discount',                    
        'payment',                    
    ];

    public function ConsolidationDetail()
    {
        return $this->hasMany(ConsolidationDetail::class, 'consolidation_id');
    }
}
