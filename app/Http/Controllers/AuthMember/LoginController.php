<?php

namespace App\Http\Controllers\AuthMember;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:member')->except('logout');
    }

    public function showLoginForm()
    {
        // return view('authMember.login');
        return view('frontend.landing.register');
    }

    // Login
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::guard('member')->attempt($credential, $request->member)){
            // If login succesful, then redirect to their intended location
            return redirect()->intended(route('member.home'));
        }

        // If Unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
