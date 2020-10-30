<?php

namespace App\Models\Product;

use App\Models\Category\Category;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RelationsTrait
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'publisher_id');
    }

    public function categories(): HasMany
    {
        $this->hasMany(Category::class);
    }
}
