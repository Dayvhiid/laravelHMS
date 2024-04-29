<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Nigeriabulksms\NigeriabulksmsChannel;
use NotificationChannels\Nigeriabulksms\NigeriabulksmsMessage;
class BookingAppointment extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return [NigeriabulksmsChannel::class];
    }

    public function toNigeriabulksms($notifiable)
    {
		return (new NigeriabulksmsMessage())
                    ->setContent('Your SMS message content');
        return (new NigeriabulksmsMessage("Your {$notifiable->service} was ordered!"))->setRecipients("09152632374");

    }
}
