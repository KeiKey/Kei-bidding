<?php


namespace App\Repository\Classes;


use App\Models\Product\Product;
use App\Repository\Contracts\ProductRepositoryInterface;

class ProductRepository extends Repository implements ProductRepositoryInterface
{

    protected function model()
    {
        return Product::class;
    }
}
