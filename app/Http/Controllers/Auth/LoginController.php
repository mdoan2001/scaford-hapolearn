<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['user_name', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('test');
        }
        return redirect()->back()->with('status', 'Tên đăng nhập hoặc mật khẩu không đúng');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
