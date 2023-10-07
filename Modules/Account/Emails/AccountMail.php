<?php

namespace Modules\Account\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $account;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($account, $password)
    {
        $this->account = $account;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thông tin khởi tạo tài khoản')
            ->view('account::mails.information')
            ->with(['data' => $this->account, 'password' => $this->password]);
    }
}
