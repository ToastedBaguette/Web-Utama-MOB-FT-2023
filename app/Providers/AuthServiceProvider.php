<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

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
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('hanyamaping',function($user){
            if ($user->divisi=='MAPING') {
                return Response::allow();
            } else {
                return Response::deny('Hanya Maping');
            }
        });
        Gate::define('hanyasfd',function($user){
            if ($user->divisi=='SFD' || $user->divisi=='BPH' || $user->divisi=='ITD') {
                return Response::allow();
            } else {
                return Response::deny('Hanya SFD');
            }
        });
        Gate::define('hanyakoorcab',function($user){
            if ($user->divisi=='KOORCAB') {
                return Response::allow();
            } else {
                return Response::deny('Hanya Koorcab');
            }
        });
        Gate::define('hanyaitd',function($user){
            if ($user->divisi=='ITD') {
                return Response::allow();
            } else {
                return Response::deny('Hanya ITD');
            }
        });
        Gate::define('hanyaed',function($user){
            if ($user->divisi=='ED' || $user->divisi=='BPH' || $user->divisi=='ITD') {
                return Response::allow();
            } else {
                return Response::deny('Hanya ED');
            }
        });
        Gate::define('hanyabph',function($user){
            if ($user->divisi=='BPH' || $user->divisi=='ITD') {
                return Response::allow();
            } else {
                return Response::deny('Hanya BPH');
            }
        });

        Gate::define('hanyaad',function($user){
            if ($user->divisi=='AD' || $user->divisi=='ITD') {
                return Response::allow();
            } else {
                return Response::deny('Hanya AD');
            }
        });

        Gate::define('hanyapanitia',function($user){
            if ($user->status=='panitia') {
                return Response::allow();
            } else {
                return Response::deny('Hanya buat panitia');
            }
        });
    }
}
