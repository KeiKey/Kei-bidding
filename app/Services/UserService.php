<?php


namespace App\Services;


use App\Models\User\User;
use App\Repository\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private static $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        self::$userRepository = $userRepository;
    }

    public static function update($oldPass, $newPass, User $user){
        if(Hash::check($oldPass, $user->password)) {
            self::$userRepository->updatePasswordByUserId($newPass, $user->id);
//            self::$userRepository->update([
//                'password' => $newPass
//            ], $user->id);
        } else {
            dd($oldPass);
        }

    }
}
