<?php

namespace App\Policies;

use App\User;
use App\Enrollment\Status;
use Illuminate\Auth\Access\HandlesAuthorization;

class FatherPolicy
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

    public function create(){
        $status = Status::where('user_id',auth()->id())->first();
        return $status->father != 1;
    }
}
