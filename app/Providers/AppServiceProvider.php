<?php

namespace App\Providers;

use App\Repository\Classes\UserRepository;
use App\Repository\Contracts\UserRepositoryInterface;
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
        $this->app->bind(UserRepositoryInterface::class,
        UserRepository::class);

        $this->app->instance(UserService::class, new UserService(new UserRepository($this->app)));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }
}
