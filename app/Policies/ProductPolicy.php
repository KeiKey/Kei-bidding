<?php

namespace App\Policies;

use App\Enums\RoleEnum;
use App\Models\Product\Product;
use App\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product.
     *
     * @param User $user
     * @param Product $product
     * @return mixed
     */
    public function view(User $user, Product $product)
    {
        return $user->role === RoleEnum::ADMIN || $user->id ===$product->publisher_id;
    }

    /**
     * Determine whether the user can edit the product.
     *
     * @param User $user
     * @param Product $product
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {
        return $user->role === RoleEnum::ADMIN || $user->id === $product->publisher_id;
    }

    /**
     * Determine whether the user can bid the product.
     *
     * @param User $user
     * @param Product $product
     * @return mixed
     */
    public function bid(User $user, Product $product)
    {
        return $user->id != $product->publisher_id;
    }
}

