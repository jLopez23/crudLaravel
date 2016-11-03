<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1]))
        {
             return view('home');
            
        }else{
            return redirect('auth/login2')
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'These credentials do not match our records or not user active.',
            ]);
        }
    }

}