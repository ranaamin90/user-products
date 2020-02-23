<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function favorites() {
        return $this->belongsToMany(Favorite::class, 'favorites',
            'user_id', 'product_id');
    }
}
