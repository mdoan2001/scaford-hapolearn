<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PasswordReset;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function reset(ResetPasswordRequest $request)
    {
        $updatePassword = PasswordReset::where(['email' => $request->email, 'token' => $request->token])->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        PasswordReset::where(['email' => $request->email])->delete();
        toastr()->success(__('message.resetpass_success'), ['timeOut' => 3000]);
        return redirect('/login');
    }
}
