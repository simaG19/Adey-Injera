<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Handle the login request and redirect based on user role.
     */
    protected function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user_role = Auth::user()->role;

            switch ($user_role) {
                case 1:
                    return redirect('/admin');  // Admin redirection
                case 2:
                    return redirect('/driver');  // Driver redirection
                default:
                    Auth::logout();  // Logout for undefined roles
                    return redirect('/login')->with('error', 'Unauthorized access.');
            }

        } else {
            // Failed authentication; redirect back with an error message
            return redirect('/login')
                ->withErrors(['email' => 'Invalid credentials. Please try again.'])
                ->withInput();  // Keep the old input
        }
    }
}
