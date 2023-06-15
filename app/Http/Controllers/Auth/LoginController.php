<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Alert;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectPath()
    {
        if (auth()->user()->type == 1) {
            return redirect()->intended(RouteServiceProvider::ADMIN);
        } else {
            Alert::error('ممنوع الدخول', 'غير مسموح لك بالدخول إلي هذه الصفحة !');
            return back();
        }
    }

    public function login(Request $request)
    {
        if ($request->type == 1) {
            if (auth()->attempt(['email' => $request->email, 'password' => $request->password], true)) {
                return $this->redirectPath();
            }
        } else {
            Alert::error('ممنوع الدخول', 'غير مسموح لك بالدخول إلي هذه الصفحة !');
            return back();
        }
    }

    public function show_form($type)
    {
        if ($type == 'admin') {
            return view('auth.login', compact('type'));
        } else if ($type == 'student') {
            return view('auth.login', compact('type'));
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
