<?php

namespace App\Http\Controllers\AuthMember;

use App\member;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function showRegisForm()
    {
        return view('frontend.landing.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:members',
            'password' => 'required|confirmed|min:6',
        ]);

        member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back();
        
    }


}
