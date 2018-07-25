<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{     
    /**
     * Get the comments for the blog post.
     */
    public function orderProducts()
    {
        return $this->hasMany(OrderProducts::class);
    }
}
