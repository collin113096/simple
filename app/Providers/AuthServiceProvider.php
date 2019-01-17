<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Enrollment\Status;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
        'App\Enrollment\Student' => 'App\Policies\StudentPolicy',
        'App\Enrollment\Father' => 'App\Policies\FatherPolicy',
        'App\Enrollment\Mother' => 'App\Policies\MotherPolicy',
        'App\Enrollment\Requirement' => 'App\Policies\RequirementPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('click-enroll', function($user){
            $status = Status::where('user_id', $user->id)->first();
            return $status->student == 1 && $status->father == 1 && $status->mother == 1 && $status->requirement == 1;
        });
    }
}
