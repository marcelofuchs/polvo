<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{    
    /**
     * Get product
     */
    public function product()
    {
        return $this->hasOne(Products::class);
    }  
    
    /**
     * Get order
     */
    public function order()
    {
        return $this->hasOne(Orders::class);
    }
    
}
