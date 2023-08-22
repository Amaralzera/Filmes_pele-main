<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function isAdmin(User $user)
{
    return $user->hasPermissionTo('admin');
}
}
