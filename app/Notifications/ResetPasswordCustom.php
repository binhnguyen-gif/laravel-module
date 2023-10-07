<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ResetPasswordCustom extends ResetPassword
{
    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            ->view('mail-template.reset-password',['url'=>$url])
            ->subject(Lang::get('Đặt lại mật khẩu'))
            ->line(Lang::get('Please click the button below to verify your email address.'))
            ->action(Lang::get('Đặt lại mật khẩu'), $url)
            ->line(Lang::get('If you did not create an account, no further action is required.'));
    }
}
