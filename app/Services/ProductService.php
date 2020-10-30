<?php


namespace App\Services;


use App\Repository\Contracts\ProductRepositoryInterface;

class ProductService
{
    private static $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        self::$productRepository = $productRepository;
    }

}
