<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{  
    
    protected $fillable = [
        'sku',
        'name',
        'description',
        'price',
    ];

}
