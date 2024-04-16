<?php

// app/Notifications/BirthdayWishNotification.php
namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue; // Recommended for bulk emails

class BirthdayWishNotification extends Notification implements ShouldQueue
{
    public function via($notifiable)
    {
        return ['mail']; // You can also add 'sms' if using Twilio
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Happy Birthday, ' . $notifiable->name . '!')
            ->line('We hope you have a wonderful day filled with joy and celebration.')
            ->line('Thanks for being a part of our community!');
    }

    // ... (Optional) SMS notification method if using Twilio
}
