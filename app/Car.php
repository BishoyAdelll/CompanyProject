<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    
}

/**
 * Get the user that owns the Car
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function Product(): BelongsTo
{
    return $this->belongsTo(Product::class, 'broduct_id', 'id');
}
/**
