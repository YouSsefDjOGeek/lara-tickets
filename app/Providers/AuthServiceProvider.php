<?php

namespace App\Providers;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
        $gate->define('isOther',function ($user) {
            return $user->role_id == 'NULL';
        });

        $gate->define('isAdmin',function ($user) {
            return $user->role_id =='1';
        });
        $gate->define('isClient',function ($user) {
            return $user->role_id =='2';
        });
        $gate->define('isTechnician',function ($user) {
            return $user->role_id =='3';
        });

        //
    }
}
