<?php

namespace App\Providers;

use Alive2212\LaravelMobilePassport\LaravelMobilePassport;
use Alive2212\LaravelMobilePassport\LaravelMobilePassportSingleton;
use Alive2212\LaravelMobilePassport\Models\AliveMobilePassportDevice;
use Alive2212\LaravelSmartResponse\ResponseModel;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use Laravel\Passport\PersonalAccessTokenResult;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        LaravelMobilePassport::initPassportTokenCan();

        LaravelMobilePassportSingleton::$otpCallBack = function (
            Request $request,
            User $user,
            AliveMobilePassportDevice $device,
            $token
        ) {
            // dispatch send sms job here to send notification

        };


        LaravelMobilePassportSingleton::$otpConfirmCallBack = function (
            Request $request,
            User $user,
            PersonalAccessTokenResult $token,
            ResponseModel $response
        ) {
            // put something here like update user name with request fields

        };
    }
}
