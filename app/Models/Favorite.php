<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    function products() {
        return $this->belongsToMany(Product::class, 'favorites',
            'user_id', 'product_id');
    }

}
