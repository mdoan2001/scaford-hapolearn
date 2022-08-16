<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Requests\SendResetLinkEmailRequest;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\PasswordReset;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function sendResetLinkEmail(SendResetLinkEmailRequest $request)
    {
        $token = Str::random(64);
        $request['token'] = $token;
        $request['created_at'] = Carbon::now();

        PasswordReset::create($request->all());

        Mail::send('email.reset-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        toastr()->success('Chúng tôi đã gửi mail cho bạn!', ['timeOut' => 3000]);
        return view('auth.login')->with('status', 'We have e-mailed your password reset link!');
    }
}
