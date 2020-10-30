<?php

namespace App\Models\Category;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RelationsTrait
{
    public function product(): BelongsTo
    {
        return $this->belongsToMany(Product::class);
    }
}
