<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewStudentNavBar(User $user){
        return $user->id !== 2;
    }

     public function viewCashierNavBar(User $user){
        return $user->id === 2;
    }
}
