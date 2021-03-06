<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\SinhVien;
use App\GiangVien;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::forUser('giangvien')->define('giang_vien', function($user){
            if($user->type == 1){
                return true;
            }
        });

        Gate::forUser('sinhvien')->define('sinh_vien', function($user){
           if($user->type == 2){
                return true;
            }
        });
    }
}
