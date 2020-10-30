<?php

namespace App\Providers;

use App\Repository\Classes\CategoryRepository;
use App\Repository\Classes\ProductRepository;
use App\Repository\Classes\UserRepository;
use App\Repository\Contracts\CategoryRepositoryInterface;
use App\Repository\Contracts\ProductRepositoryInterface;
use App\Repository\Contracts\UserRepositoryInterface;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        $this->bootServices();
    }

    private function registerRepositories()
    {
        $this->app->bind(UserRepositoryInterface::class,
            UserRepository::class);

        $this->app->bind(CategoryRepositoryInterface::class,
            CategoryRepository::class);

        $this->app->bind(ProductRepositoryInterface::class,
            ProductRepository::class);
    }

    private function bootServices()
    {
        $this->app->instance(UserService::class, new UserService(new UserRepository($this->app)));

//        $this->app->instance(CategoryService::class, new UserService(new CategoryRepository($this->app)));
//
//        $this->app->instance(ProductService::class, new UserService(new ProductRepository($this->app)));
    }
}
