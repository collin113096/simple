<?php

namespace App\Policies;

use App\User;
use App\Enrollment\Status;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
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

    public function create(User $user){

        $status = Status::where('user_id',$user->id)->first();
        if($status->student != 1){
            return true;
        }
    }
}
