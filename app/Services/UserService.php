<?php


namespace App\Services;


use App\Models\User\User;
use App\Repository\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserService
{
    private static $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        self::$userRepository = $userRepository;
    }

    public static function update( $newPass, User $user)
    {
            self::$userRepository->updatePasswordByUserId($newPass, $user->id);
    }
}
