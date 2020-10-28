<?php

namespace App\Models\User;

use App\Enums\RoleEnum;

trait AttributesTrait
{
    public function isAdmin()
    {
        return $this->role == RoleEnum::ADMIN;
    }

    public function isUser()
    {
        return $this->role == RoleEnum::USER;
    }
}
