<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Classes\ActivationService;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['user_name', 'password']);
        if (Auth::attempt($credentials)) {
            toastr()->success(__('message.login_success'), ['timeOut' => 1000]);
            return $this->sendLoginResponse($request);
        }
        return redirect()->back()->with('error', __('message.login_error'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        toastr()->success(__('message.logout_success'), ['timeOut' => 1000]);
        return redirect('home');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->with('warning', 'Bạn cần xác thực tài khoản, chúng tôi đã gửi mã xác thực vào email của bạn, hãy kiểm tra và làm theo hướng dẫn.');
        }
        return redirect()->intended($this->redirectPath());
    }
}
