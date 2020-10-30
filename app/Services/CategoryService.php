<?php


namespace App\Services;


use App\Repository\Contracts\CategoryRepositoryInterface;

class CategoryService
{
    private static $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        self::$categoryRepository = $categoryRepository;
    }

}
