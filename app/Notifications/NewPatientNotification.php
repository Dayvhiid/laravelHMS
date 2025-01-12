<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage; // Or any other channel you are using
use Illuminate\Notifications\Notification;

class NewPatientNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $patientInfo;

    /**
     * Create a new notification instance.
     *
     * @param $patientInfo
     */
    public function __construct($patientInfo)
    {
        $this->patientInfo = $patientInfo;
    }

    /**
     * Determine the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database']; // Adjust based on your delivery channels
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new patient has been registered.')
                    ->line('Patient Name: ' . $this->patientInfo->first_name . ' ' . $this->patientInfo->last_name)
                    ->line('Phone: ' . $this->patientInfo['phone'])
                    ->line('Email: ' . $this->patientInfo['email'])
                    ->action('View Patient', url('/patients'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the database representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'patient_id' => $this->patientInfo['pid'],
            'name' => $this->patientInfo['firstname'] . ' ' . $this->patientInfo['lastname'],
            'phone' => $this->patientInfo['phone'],
            'email' => $this->patientInfo['email'],
        ];
    }
}
