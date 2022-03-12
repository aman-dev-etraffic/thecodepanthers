<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Models\User;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $saveddetails = Auth::user()->saveddetails;
        $completeprofile = Auth::user()->completeprofile;
        $admin = Auth::user()->roles;
        //dd($admin);

        //$user = Auth::user()->roles('user');
        $approved = Auth::user()->approved;
        $id = Auth::user()->id;        
        if(!$saveddetails) {
            return '/register-step2';
        }

        if(!$completeprofile) {
            return '/register-step3';
        }

        if($saveddetails && $completeprofile && $admin == 'admin')
        {
            return '/admin/dashboard';
        }
        if(!$approved)
        {
            return '/approved-form';
        }
        if($saveddetails && $completeprofile  && $approved)
        {
            return '/user/display_all_portfolio/'.$id;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
