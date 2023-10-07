<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class VerifyEmailUser extends VerifyEmail
{
    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            ->view('mail-template.verify-user',['url'=>$url])
            ->subject(Lang::get('Xác thực tài khoản người dùng'))
            ->line(Lang::get('Please click the button below to verify your email address.'))
            ->action(Lang::get('Verify Email Address'), $url)
            ->line(Lang::get('If you did not create an account, no further action is required.'));
    }
}
