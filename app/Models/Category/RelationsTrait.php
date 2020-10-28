<?php

namespace App\Models\Category;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RelationsTrait
{
    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
