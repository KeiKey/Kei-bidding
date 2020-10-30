<?php


namespace App\Repository\Classes;


use App\Models\User\User;
use App\Repository\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository implements UserRepositoryInterface
{

    protected function model()
    {
        return User::class;
    }

    public function updatePasswordByUserId($newPass, $userId)
    {
        $newPass = Hash::make($newPass);
        return $this->update([
            'password' => $newPass
        ], $userId);

//        ->update($newPass)
    }
}
