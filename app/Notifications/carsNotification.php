<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class carsNotification extends Notification
{
    use Queueable;

    public $cars;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($cars)
    {
        $this->cars = $cars;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('hello.' . $notifiable->name)
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'message' => 'A new car has been added.',
            'name' => $this->cars->name,
            'email' => $this->cars->email,
        ];
    }
    // public function toArray($notifiable)
    // {
    //     return [
    //         'message' => 'A new car has been added.',
    //         'name' => $this->cars->car_name,
    //         'email' => $this->cars->email,
    //     ];
    // }
}
