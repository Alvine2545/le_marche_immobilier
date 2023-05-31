<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\Administrateur;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        if(request()->is('admin/*')){

            config()->set('fortify.guard', 'admin');
            config()->set('fortify.home', '/admin/home');

        }else{
            config()->set('fortify.guard', 'web');
            config()->set('fortify.home', 'home');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function(){
            return view('auth.login');
        });

        Fortify::authenticateUsing(function(Request $request){
            if($request->is('admin/*')){
                $user = Administrateur::where('email', $request->email)->first();
                if($user && Hash::check($request->password, $user->password)){
                    return $user;
                }
            }else{
                $user = User::where([['email', $request->email], ['etatCompte', true]])->first();
                if($user && Hash::check($request->password, $user->password)){
                    return $user;
                }
            }
        });

        Fortify::registerView(function(){
            return view('auth.register');
        });

        Fortify::requestPasswordResetLinkView(function(){
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function($request){
            return view('auth.reset-password', ['request' => $request]);
        });

    Fortify::verifyEmailView(function () {
        return view('auth.verify-email');
    });

    }
}