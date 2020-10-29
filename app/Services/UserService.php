<?php


namespace App\Services;


use App\Repository\Contracts\UserRepositoryInterface;

class UserService
{
    private static $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        self::$userRepository = $userRepository;
    }
}
