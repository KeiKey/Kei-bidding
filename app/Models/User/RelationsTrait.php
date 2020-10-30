<?php

namespace App\Models\User;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RelationsTrait
{
    public function products(): HasMany
    {
        $this->hasMany(Product::class);
    }
}
