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

    public static function update($oldPass, $newPass, User $user)
    {
//        return redirect('panel/profile')->withErrors([
//            'old_password' => 'old password incorrect'
//        ]);
//        return Redirect::back()->withErrors(['old_password', 'old_password incorrect']);
//        return redirect()->back()->withErrors([
//            'old_password' => 'old password incorrect'
//        ]);
        if (Hash::check($oldPass, $user->password)) {
            self::$userRepository->updatePasswordByUserId($newPass, $user->id);
        } else {
            return back()->withErrors(['old_password', 'Please enter the correct old password']);
        }

    }
}
