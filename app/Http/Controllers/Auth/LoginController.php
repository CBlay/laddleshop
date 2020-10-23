<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';


    /**
       * Show the application's login form.
       *
       * @param  \Illuminate\Http\Request  $request
       *
       * @return \Illuminate\Http\Response
       */
      public function showLoginForm(Request $request)
      {
          $request->session()->flash('redirectTo', url()->previous());
          return view('auth.login');
      }

  /**
       * Ran post authentication logic.
       * Overwrites authenticated() in AuthenticatesUsers trait.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  mixed  $user
       * @return mixed
       */
      public function authenticated(Request $request, $user)
      {
          return redirect($request->session()->get('redirectTo'));
      }

}
