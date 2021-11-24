<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserApprovalnotification extends Notification implements ShouldQueue
{
    use Queueable;

   
    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

   
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Your account has beed approved')
                    ->action('Please Login', route('login'));
                   
    }

  
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
