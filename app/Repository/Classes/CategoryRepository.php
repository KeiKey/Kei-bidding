<?php


namespace App\Repository\Classes;


use App\Models\Category\Category;
use App\Repository\Contracts\CategoryRepositoryInterface;

class CategoryRepository extends Repository implements CategoryRepositoryInterface
{

    protected function model()
    {
        return Category::class;
    }
}
