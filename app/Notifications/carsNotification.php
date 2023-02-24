<?php

namespace App\Notifications;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\VonageMessage;

class carsNotification extends Notification
{
    use Queueable;

    public $car;
    public $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($car, $message)
    {
        $this->car = $car;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'vonage', 'mail'];
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
            // ->greeting('hello.' . $notifiable->name)
            ->greeting($this->message)
            ->line("Mobil " . $this->car->car_name)
            ->line("rental per hari" . $this->car->rent_cost)
            ->line("ukuran " . $this->car->sizeCar_id)
            ->line($this->car->created_by);
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
            'message' => $this->message,
            'car' =>   $this->car,
        ];
    }
    public function toVonage($notifiable)
    {
        return (new VonageMessage)
            ->content($this->message);
    }
}
