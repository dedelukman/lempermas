<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'photo',        
        'discount',        
        'active',        
    ];

     public function product()
    {
        return $this->hasMany(Product::class, 'supplier_id');
    }

    public function consolidation()
    {
        return $this->hasMany(Consolidation::class, 'supplier_id');
    }
}
